function dataRetroativa(data_){

    var hoje = new Date();
 
    if((hoje.getDate() > data_.getDate()) && (hoje.getMonth() == data_.getMonth()) && (hoje.getFullYear() == data_.getFullYear())){            
        alert("Data retroativa");      
    }
    
    else if((hoje.getDate() > data_.getDate()) && (hoje.getMonth() > data_.getMonth()) ||  (hoje.getFullYear() > data_.getFullYear())){            
    alert("Data retroativa");      
    }
    
    else if((hoje.getDate() < data_.getDate()) && (hoje.getMonth() > data_.getMonth()) ||  (hoje.getFullYear() > data_.getFullYear())){            
    alert("Data retroativa");      
    }
 };