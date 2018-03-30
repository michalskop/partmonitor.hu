import os

for i in range(0, 91):
    command = "chromium-browser --headless --disable-gpu --screenshot --hide-scrollbars --window-size=952,900 --save-to-png=q50.png http://localhost/michal/project/voksmonitor.hu/www/2018-es-orszaggyulesi-valasztas-match/questions/questions.php?qid=" + str(i)
    os.system(command)
    command = "cp screenshot.png questions/question_" + str(i) + ".png"
    os.system(command)
    print(i)
