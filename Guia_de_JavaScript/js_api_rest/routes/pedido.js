const express = require("express");
const router = express.Router();

//ver
router.get('/', (req, res, next) => {
    res.status(200).send({
        messagem: "Retorna pedidos!"
    });
});
//insere
router.post('/', (req, res, next) => {
    res.status(201).send({
        messagem: "O pedido foi criado!"
    });
});

//ver 1 pedido
router.get("/:id", (req, res, next) => {
    const id = req.params.id;
    res.status(200).send({
        messagem: "detalhes do pedido!",
        id: id
    })
})

//altera
router.patch('/', (req, res, next) => {
    res.status(201).send({
        messagem: "Pedido alterado!"
    });
});

//Delete
router.delete('/', (req, res, next) => {
    res.status(201).send({
        messagem: "Pedido excluido!"
    });
});

module.exports = router;