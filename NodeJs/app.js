const fs = require('fs')
const os = require('os')
const http = require('http')

/*
fs.writeFile('itstu.txt',"Hello IT student", (err) => {
    if (err) console.log(err)

    console.log('file written');
})


fs.readFile("./itstu.txt", "utf8" , (err, data) => {
    if (err) {
        console.log(err)
    }
    console.log(data);
})


fs.appendFile("itstu.txt", " - this is node module practice" , (err) => {
    if (err) console.log(err)
    console.log("file is written");
})



console.log(os.platform());
console.log(os.totalmem())
console.log(os.freemem())
console.log(os.arch())


  
const server = http.createServer(function (req, res) {
    console.log("request received")
    res.end("hello yihaw lakulh")
    })
    server.listen(5000, function(){
        console.log("It is listening on port 5000 http://localhost:5000")
    })


const server = http.createServer(function (req, res) {
    if(req.url == "/"){
    res.end("Hello this is node.js http module practice")
    }
    else if(req.url == "/about"){
        res.end("Hello we are it students")
    }
    else if(req.url == "/addStudent"){
        res.end("Hello this is add student to database")
    }
    else if(req.url == "/viewStudent"){
        res.end("Hello this is view student from database")
    }
    else{
        res.end("this site can't be reached")
    }
    


})
server.listen(5000, function(){
        console.log("It is listening on port 5000 http://localhost:5000")
    })*/


    const express = require("express")
    const app = express()

    app.get("/", (req,res) => {
        res.send("Hello this is express web server practice(GET / ")
        })

    app.get("/about", (req,res) => {
        res.send("Hello We are IT students (GET /about ")
        })

     app.get("/viewStudent", (req,res) => {
        res.send("viewing students from database (GET /viewStudent ")
        })

    app.post("/addStudent", (req,res) => {
        res.send("Adding students to database (GET /addStudent ")
        })

    app.use((req,res)=> {
        res.status(404).send("page not found")
    })

    const PORT = 3000
    app.listen(PORT,() => {
        console.log(`listening 3000 http://localhost:${PORT}`)
    
    })
