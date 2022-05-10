
let width = document.documentElement.clientWidth - 550;
const widthCard = 263;

drawing(width);

window.addEventListener('resize',function(){
    let newWidth = document.documentElement.clientWidth - 550;

    if (Math.floor(newWidth/widthCard) !== Math.floor(width/widthCard)) {
        width = newWidth;
        drawing(newWidth);
    }
});

function drawing(width) {

    let $columns = document.getElementById('columns');

    $columns.innerHTML = "";

    for (let i = 0; i < Math.floor(width/widthCard); i++) {
        let div = document.createElement('div');
        div.className = "main-column";
        div.id = 'column' + Number(i + 1);
        $columns.append(div);
    }

    getData(Math.floor(width/widthCard));
}

function getData(cols) {
    let data = [];
    for (let i = 1; i!== 16; i++) {
        let test = {
            id: i,
            img: 'post' + i + '.svg',
            user: {
                name: 'Aquica Researcher',
                img: 'logo_post.svg'
            }
        }
        data.push(test);
    }

    let col = 1;
    for (let i = 0; i < data.length; i++) {
        let $column = document.getElementById('column' + col);

        let column_element = document.createElement('div');
        column_element.className = "column_element";

        let post_img = document.createElement('div');
        post_img.className = "post-img";
        post_img.innerHTML = "<img src='" + document.location.protocol + '//' + document.location.host + "/resources/images/main_page/" + data[i].img + "' alt='card-post'>";
        column_element.append(post_img);

        let post_username = document.createElement('div');
        post_username.className = "post-username";
        post_username.innerHTML = "<img src='" + document.location.protocol + '//' + document.location.host + "/resources/images/logos/" + data[i].user.img + "' alt='card-post'><h6>" + data[i].user.name + "</h6>";
        column_element.append(post_username);

        $column.append(column_element);

        if (col === cols) {
            col = 1;
        }
        else {
            col++;
        }

        //console.log($column);
    }
}
