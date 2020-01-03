import os
from flask import Flask, request, send_from_directory

INDEX_PAGE = open('index.html').read()
app = Flask(__name__)


@app.route('/')
def index():
    return INDEX_PAGE


@app.route('/upload', methods=["POST"])
def upload():
    file = request.files['file']
    file.save(os.path.join('uploads', file.filename))
    return "saved to <a href='/uploads/{0}'>/uploads/{0}</a>".format(file.filename)


@app.route('/uploads/<path:path>')
def uploads(path):
    return send_from_directory('uploads', path)
