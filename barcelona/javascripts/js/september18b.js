function drive(direction, speed){
    if (direction=='forward'){
        document.write("We are taking off in speed of " + speed+"<hr>");
    }else if (direction=='back'){
        if (speed>10){
            alert("oh woww.. hold on mr Usain Bold..");
        }else{
            document.write("We are backing up!");
        }

    }else{
        document.write("Sorry the car moves only forward and back <hr>");
    }
}

drive('forward',50);
drive('back',11);