## german.py


## This script has the ability to change the language of the
## Smith-Pad-OS-Shell to german based on the user's
## preferences.


import os

def selectLang():
        uidarkmode = os.system('touch ../../.log/user.changed.to.german')

        if uidarkmode == 0:
                print('hello world')




log()
selectLang()