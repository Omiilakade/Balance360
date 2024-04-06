from tkinter import*
import  mysql.connector
def add():
    username1=username.get()
    password1=password.get()
    sql=mysql.connector.connect(host="localhost",username="root",password="",database="logindetails")
    cur=sql.cursor()
    d="insert into login(username,password) values(%s,%s,%s)"
    val=(username1,password1)
    cur.execute(d,val)
    sql.commit()
    sql.close()
root=Tk()
username=StringVar()
password=StringVar()

root.geometry("400x400")
Label(root,text="username").pack()
Entry(root,textvariable=username).pack()

Label(root,text="password").pack()
Entry(root,textvariable=password).pack()

Button(root,text="insert",command=add).pack()
root.mainloop()
