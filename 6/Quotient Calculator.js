function main(input) {

    let [a, b] = input.split(" ").map(Number);


    let r = parseInt(a / b);

    console.log(r);
}

let input = "";
process.stdin.on('data', (chunk) => {
    input += chunk;
});

process.stdin.on('end', () => {
    main(input.trim());
});
