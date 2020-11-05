var current_page = '/set-paginations?page=1';
$(document).ready(function(){
    getData(current_page);

    $("body").on('click','a.page-link', function(){

        let page = $(this).attr("href");
        current_page = page;
        getData(page);
        return false;

    });
});

getData = function(current_page){
    $.get(current_page, function(data){
        let d = data.data;
        let qty = data.last_page;

        let next_page_url = (data.next_page_url) ? data.next_page_url.substring(data.next_page_url.length-1) : qty;
        let prev_page_url = (data.prev_page_url) ? data.prev_page_url.substring(data.prev_page_url.length-1) : 1;
        let html = "";
        $.each(d, function(index, element){
            html+="<tr>";
                html+="<td>"+element.id+"</td>";
                html+="<td>"+element.title+"</td>";
                html+="<td><button class='btn btn-primary'>Agregar</button></td>";
            html+="</tr>";
        });
        
        $("#load_data").html(html);
        $("ul.pagination").html(generatePagination(qty, prev_page_url, next_page_url));
        html = "";
    });
}

generatePagination = function(qty,pr,nr){
    let html = '<li class="page-item"><a class="page-link" href="/set-paginations?page='+pr+'">Previous</a></li>';

    for(let i=1; i <= qty; i++){
        if(current_page == '/set-paginations?page='+i){
            html+='<li class="page-item active"><a class="page-link" href="/set-paginations?page='+i+'">'+i+'</a></li>';
        }else{
            html+='<li class="page-item"><a class="page-link" href="/set-paginations?page='+i+'">'+i+'</a></li>';
        }
        
    }
    html+='<li class="page-item"><a class="page-link" href="/set-paginations?page='+nr+'">Next</a></li>'
    return html;
}