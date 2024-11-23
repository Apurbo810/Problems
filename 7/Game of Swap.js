function main(input) {
    let [a, b] = input.split(" ").map(Number);


    console.log("Before swapping: num1 = "+a+" and num2 = "+b);
    console.log("After swapping: num1 = "+b+" and num2 = "+a);

}
let input = "";
process.stdin.on('data', (chunk) => {
    input += chunk;
});

process.stdin.on('end', () => {
    main(input.trim());
});
