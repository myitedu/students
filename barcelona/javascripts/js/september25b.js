let arr = ['A','B','C','D','E'];
//arr.push(4); //Add a value to the end of the array
//arr.unshift(0); //Add a value to the beginning of the array
//arr.pop(); //Remove the last item in the array
//arr.shift();//Remove the first item in the array
//arr.length //get the length of the array
//let arr2 = arr.concat([4, 5]);//Concatenating the two arrays
//let arr2 = arr.slice(0, 9); slice array from start to end length
//let jon = arr.includes(2024); //Search in array and returns boolean
//let jon = arr.indexOf('E');//Search a keyword in an array and returns the position

let pos = arr.indexOf('C');
if (pos !==-1){
    document.write("Found : " + pos);
}else{
    document.write("Not Found");
}


/*arr2.forEach(function (number) {
    document.write(number+" | ");
});*/
