import os
import sys
import gradio as gr
from langchain.chains import ConversationalRetrievalChain, RetrievalQA
from langchain.chat_models import ChatOpenAI
from langchain.document_loaders import DirectoryLoader, TextLoader
from langchain.embeddings import OpenAIEmbeddings
from langchain.indexes import VectorstoreIndexCreator
from langchain.indexes.vectorstore import VectorStoreIndexWrapper
from langchain.llms import OpenAI
from langchain.vectorstores import Chroma
import constants

os.environ["OPENAI_API_KEY"] = constants.APIKEY

persist = False
Question = None

loader = DirectoryLoader(r"C:\Users\siimr\Desktop\JAMS\JAMS-Traveling-Agency-\Test\pjsHardware-main\pjsHardware-main\data")

if persist:
    index = VectorstoreIndexCreator(vectorstore_kwargs={"persist_directory": "persist"}).from_loaders([loader])
else:
    index = VectorstoreIndexCreator().from_loaders([loader])

chain = ConversationalRetrievalChain.from_llm(
    llm=ChatOpenAI(model="gpt-4"),
    retriever=index.vectorstore.as_retriever(search_kwargs={"k": 1}),
)
  
chatHist = []

def chatbot(Question):
    global chatHist
    results = chain({"question": Question, "chat_history": chatHist})
    response = results['answer']
    chatHist.append((Question, response))
    return response

iface = gr.Interface(fn=chatbot, inputs="text", outputs="text", title="JAMS' ChatBot",theme=gr.themes.Monochrome(),description="Ask a question about JAMS")
iface.launch()

