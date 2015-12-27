
data=JSON.parse('{"name":"nikhil","age":23,"lang":["c","php","js","html"]}');

function rec_json (obj) {
	
	if (obj !== null && typeof obj == "object") {
		Object.keys(obj).map(function(key,val){
	
			if(obj[key] !== null && typeof obj[key] == "object"){
				rec_json(obj[key]);
			}else if(Object.prototype.toString.call( obj[key] ) === '[object Array]'){
				rec_json(obj[key]);
			}else{
				console.log(obj[key]);
			}
	
		});	
	}else if(Object.prototype.toString.call( obj ) === '[object Array]'){
	
		for (var i = 0; i < obj.length; i++) {
			console.log(obj[i]);
		};
	
	}else{
		console.log("please pass a valid obj to parse");
	}

}

rec_json(data);
