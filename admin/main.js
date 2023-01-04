function toggleMenu() {
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    toggle.classList.toggle('active');
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}


// dùng thư viện jquery
$("#ten_danh_muc").keyup(function() {
    var str = $(this).val();
    var strims = $.trim(str);
    var slug = strims.replace(/[^a-zA-Z0-9]/gi," ").replace(/-+/g,"").replace(/^-|/g,"");
    $("#slug_danh_muc").val(slug.toLowerCase());
})

$("#ten_san_pham").keyup(function() {
    var str = $(this).val();
    var strims = $.trim(str);
    //var slug = strims.normalize('NFD').replace(/[^a-zA-Z0-9]/gi," ").replace(/-+/g,"").replace(/^-+|-+$/g, '').replace(/[đĐ]/g, 'd').replace(/(\s+)/g, '-').replace(/[\u0300-\u036f]/g, '');
    var slug = strims.normalize('NFD').replace(/[\u0300-\u036f]/g, '').replace(/[đĐ]/g, 'd').replace(/([^0-9a-z-\s])/g, '').replace(/(\s+)/g, '-').replace(/-+/g, '-').replace(/^-+|-+$/g, '');
    $("#slug_san_pham").val(slug.toLowerCase());
})

// testing
// hiển thị tắt chỉnh sửa danh mục
// const editBtns = document.querySelectorAll('.edit_DM')
// const modal_edit = document.querySelector('.modal_edit');
// const modal_close = document.querySelector('.close');
// function showEditDM() {
//     modal_edit.classList.add('open')
// }

// function hideEditDM() {
//     modal_edit.classList.remove('open')
// }

// for (const edit_Btn of editBtns) {
//     edit_Btn.addEventListener('click', showEditDM)
// }

// modal_close.addEventListener('click', hideEditDM)

