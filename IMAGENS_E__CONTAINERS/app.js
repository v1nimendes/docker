const express = require('express')
const app = express()
const port = 5000

app.get('/', (req, res) => {
    res.send('Olá minha imagem!')
}) 

app.listen(port, () => {
    console.log(`Executando na porta: ${port}`)
});
