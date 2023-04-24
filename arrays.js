const abecedario =['a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z']

const email = ['@' && '.com','.es','.cl','.net','.org','.edu','.gob']

palabra = 'hola esta palabra es demasiado larga';

function esPalindromo(palabra) {
    if (palabra.length > 10) {
      return "Error: palabra ingresada excede las 10 letras";
    }
    let invertida = palabra.split("").reverse().join("");
    if (palabra === invertida) {
      return "La palabra ingresada es un palíndromo";
    } else {
      return "La palabra ingresada no es un palíndromo";
    }
}

console.log(esPalindromo)


module.exports = {
    email,
    abecedario
}
