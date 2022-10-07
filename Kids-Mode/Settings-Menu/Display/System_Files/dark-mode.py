## dark-mode.py
## An ability for the user to view dark mode ui 
## via button press in the user interface. 



import os


def selectColor():
        detectLanguageOne = os.system('cat ../../../.log/user-changed-to-english')
        detectLanguageTwo = os.system('cat ../../../.log/user-changed-to-spanish')
        detectLanguageThree = os.system('cat ../../../.log/user-changed-to-sinhala')
        detectLanguageFour = os.system('cat ../../../.log/user-changed-to-tamil')
        detectLanguageFive = os.system('cat ../../../.log/user-changed-to-japanese')
        detectLanguageSix = os.system('cat ../../../.log/user-changed-to-german')
        detectLanguageSeven = os.system('cat ../../../.log/user-changed-to-chinese')


        ## Make an if statement that would detect a language and change
        ## some parameters if a language has been changed. 

        ## It if detects no preference, then it will not change the 
        ## language while changes to dark mode
        if detectLanguageOne == 0:
                print("hello english")


        ## If it detects spanish, then will change to dark mode 
        ## with spanish
        if detectLanguageTwo == 0: 
                print("hello spanish")



        ## If it detects sinhala, then will change to dark mode
        if detectLanguageThree == 0:
                print("hello sinhala")



        ## If it detects 
        if detectLanguageFour == 0: 
                print("hello tamil")




        if detectLanguageFive == 0: 
                print("hello japanese")




        if detectLanguageSix == 0:
                print("hello german")




        if detectLanguageSeven == 0: 
                ## Change directory 3 times 
                os.system('cd ../')
                os.system('cd ../')
                os.system('cd ../')
 
                print('It is working')
                

        


        

selectColor()
