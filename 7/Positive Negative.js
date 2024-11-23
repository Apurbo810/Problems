function main(input) {
    let n = parseInt(input);

    if(n>0){
        console.log(n+" is a positive number.");
    }
    else if(n<0){
        console.log(n+" is a negative number.");
    }
    else{
        console.log("The number is zero.");
    }
}
let input = "";
process.stdin.on('data', (chunk) => {
    input += chunk;
});

process.stdin.on('end', () => {
    main(input.trim());
});
