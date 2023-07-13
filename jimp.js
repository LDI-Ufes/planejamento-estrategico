
import jimp from 'jimp';
import fs from 'fs';

const images = fs.readdirSync('./img/');

images.forEach((img) => {
    jimp.read(`./img/${img}`).then((imagem) => {
        if (imagem.bitmap.width > 1000) {
            imagem.resize(jimp.AUTO, 1000).write(`img/${img}`)
        }
    }).catch(err => console.log(err))
})