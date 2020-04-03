from flask import Flask, request
import sys, requests, json
from multiprocessing import Process
app = Flask(__name__)

@app.after_request
def add_headers(response):
    response.headers.add('Access-Control-Allow-Origin', '*')
    response.headers.add('Access-Control-Allow-Headers', 'Content-Type,Authorization')
    return response

@app.route('/', defaults={'path': ''}, methods=['POST'])
@app.route('/<path:path>', methods=['POST'])
def catch_all(path):
    try:
        # Get the body of the POST req
        body = request.data
        s = 'You want path: {} and data: {}'.format(path, body)
        print("All: "+s, file=sys.stderr)
        dataString = body.decode("utf-8")
        # Get the first index of '&' char
        ANDlndex = [pos for pos, char in enumerate(dataString) if char == '&'][0]
        data = dataString[(ANDlndex+1):]
        print("striped: "+data, file=sys.stderr)
        jsonData = json.loads(data)
        r = requests.post('http://10.10.1.140:9200/'+path, json={"username": jsonData['username'], "password": jsonData['password']})
        print(r.status_code,  file=sys.stderr)
        return json.dumps({'success': True}), 200, {'ContentType': 'application/json'}
    except:
        return json.dumps({'rip': True}), 404, {'ContentType': 'application/json'}

def http_app(ip, httpsPort):
    app.run(host=ip, port=httpsPort)

if __name__ == '__main__':
    ip = '0.0.0.0'
    httpPort = 5150
    httpsPort = 5151
    Process(target=http_app, args=(ip, httpPort), daemon=True).start()
    app.run(host=ip, port=httpsPort, ssl_context=('cert.pem', 'key.pem'))

