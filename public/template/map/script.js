
async function getData() {
    const api_url = "https://api.covid19india.org/state_district_wise.json";
    const response = await  fetch(api_url);
    // console.log(response);
    const data1 = await response.json();
    var keys = Object.keys(data1.Maharashtra.districtData);

    var sum = 0;
    var data = data1.Maharashtra.districtData;
    Object.values(data).forEach(value => {
        sum += value.confirmed;
    });
    console.log(sum);
    Object.keys(data).forEach(key => {
        if (data.hasOwnProperty(key)) 
        {
			var ele = document.getElementById(key);
            if (ele != null) 
                ele.textContent = data[key].confirmed;
			console.log(key + " " + data[key].confirmed);
		}
    });

    var Pune = document.getElementById("Pune")
    Pune.textContent = parseInt(Pune.textContent) + data["Pimpri-Chinchwad"].confirmed;

    colours = ["#ffcccc","ff9999","#ff6666","#ff3333","#ff0000","#cc00000","#990000","#660000","#330000"]
    function findShade(cases, total)
    {
        var percentage = parseInt(cases) / parseInt(total) * 10;
        console.log(parseInt(cases) + " " + colours[Math.round(percentage)]);
        return colours[Math.round(percentage)];
    }
    var svgs = document.getElementsByClassName('svg');
    // console.log(Object.values(svgs))
    Object.values(svgs).forEach(svg => {
        if (data[svg.id.slice(0, -1)]) 
        {
            svg.style.fill = findShade(data[svg.id.slice(0, -1)].confirmed,sum);
            console.log(svg.id);
        }
        else
        {
            svg.style.fill = "white";
        }
	});
    
    var PuneSvg = document.getElementById("Pune1");
    PuneSvg.style.fill = findShade(data[PuneSvg.id.slice(0, -1)].confirmed + data["Pimpri-Chinchwad"].confirmed,sum);
    // console.log((parseInt(data[PuneSvg.id.slice(0, -1)].confirmed) + parseInt(data["Pimpri-Chinchwad"].confirmed)) / sum * 10);
}

getData();

// var elements = document.getElementsByClassName("dist");
// // console.log(elements.Dhule.textContent)
// function abc(id, textContent) {
// 	var element = document.getElementById(textContent);
// 	element.textContent =
// 		text + " " + str(data.Maharashtra.districtData.text.confirmed);
// }

// elements.forEach(abc);

