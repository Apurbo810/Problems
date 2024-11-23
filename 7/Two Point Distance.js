function main (input) {
    let [a, b] = input.split(" ").map(Number);
    let [c, d] = input.split(" ").map(Number);
    

    Math.sqrt((a - c) ** 2 + (b - d) ** 2);
}

let input = "";
process.stdin.on('data', (chunk) => {
    input += chunk;
});

process.stdin.on('end', () => {
    main(input.trim());
});