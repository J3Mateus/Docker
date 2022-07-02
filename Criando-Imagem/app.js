const express = require("express")

const app = express()

app.get("/",(req,res)=>{
    res.send("Olá imagem")
})

app.listen(3000,()=>{
    console.log("API RODANDO NA PORTA 8000")
})