function deleteConfirm(id) {
    let deleteForm = document.getElementById('delete_form' + id);

    if (confirm('削除してもよろしいでしょうか？')) {
        deleteForm.submit();
    }
}