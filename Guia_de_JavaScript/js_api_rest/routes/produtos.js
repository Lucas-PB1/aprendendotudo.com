const express = require("express");
const router = express.Router();

//ver
router.get('/', (req, res, next) => {
    res.status(200).send({
        messagem: "Retorna produtos!"
    });
});
//insere
router.post('/', (req, res, next) => {
    res.status(201).send({
        messagem: "O produto foi criado!"
    });
});

//ver 1 pedido
router.get("/:id", (req, res, next) => {
    const id = req.params.id;
    if (id === "especial") {
        res.status(200).send({
            messagem: "detalhes do produto especiaal!",
            id: id
        })
    } else {
        res.status(200).send({
            messagem: "detalhes do produto!",
            id: id
        })
    }

})

//altera
router.patch('/', (req, res, next) => {
    res.status(201).send({
        messagem: "Produto alterado!"
    });
});

//Delete
router.delete('/', (req, res, next) => {
    res.status(201).send({
        messagem: "Produto excluido!"
    });
});

module.exports = router;