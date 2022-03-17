<div class="modal" id="DeleteModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Xóa Feedback</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <form method="POST" class="form-delete-btn" enctype="multipart/form-data" style="display: none;"></form>
            <div class="modal-body">
                Bạn có chắc chắn muốn xóa Feedback này không?
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <button class="btn btn-danger delete-btn spinner-small spinner-container" type="submit">
                    Xóa
                </button>
            </div>

        </div>
    </div>
</div>
<div class="modal admin-add-event-form" id="CreateModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm mới</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form method="POST" class="form-add-btn" enctype="multipart/form-data"></form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-bs-dismiss="modal">Hủy</button>
                <button class="btn btn-primary add-btn add-event spinner-small spinner-container" type="submit" disabled>
                    Thêm mới
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal admin-update-event-form" id="EditModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Sửa Event</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" class="form-edit-btn" enctype="multipart/form-data"></form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> -->
                <button class="btn btn-danger" data-bs-dismiss="modal">Hủy</button>
                <button class="btn btn-primary edit-btn update-event spinner-small spinner-container" type="submit">
                    Cập nhật
                </button>
            </div>

        </div>
    </div>
</div>


<script>
    const feedbackIdInput = document.querySelector("#id-field");
    const editBtn = document.querySelector(".edit-btn");
    const formEditBtn = document.querySelector(".form-edit-btn");
    const addBtn = document.querySelector(".add-btn");
    const formAddBtn = document.querySelector(".form-add-btn");
    const deleteBtn = document.querySelector(".delete-btn");
    const formDeleteBtn = document.querySelector(".form-delete-btn");

    //sửa Body, Title Form, Footer
    const modalBody = document.querySelector(".modal-body");
    const modalTitle = document.querySelector(".modal-title");
    const modalFooter = document.querySelector(".modal-footer");

    const handleFieldName = (key, name_field = "", html = "", type_field = "text") => {
        let required_field = false;
        switch (key) {
            case "name":
                name_field = 'Tên';
                required_field = true;
                break;
            case "content":
                name_field = 'Nội dung';
                required_field = true;
                break;
            case "image":
                name_field = 'Ảnh';
                type_field = "file";
                required_field = true;
                break;
            case "open_date":
                name_field = 'Thời gian bắt đầu';
                type_field = "datetime-local";
                required_field = true;
                break;
            case "slogan":
                name_field = 'Tiêu đề';
                required_field = true;
                break;
            case "end_date":
                name_field = 'Thời gian kết thúc';
                type_field = "datetime-local";
                required_field = true;
                break;
            case "password":
                name_field = 'Mật khẩu';
                type_field = "password";
                required_field = true;
                break;
            case "email":
                name_field = 'Email';
                required_field = true;
                break;
        }
        return {
            name_field,
            html,
            type_field,
            required_field
        };
    }

    editBtn.onclick = () => {
        editBtn.classList.add("loading")
        formEditBtn.submit();
    }
    addBtn.onclick = () => {
        addBtn.classList.add("loading")
        formAddBtn.submit();
    }
    deleteBtn.onclick = () => {
        deleteBtn.classList.add("loading")
        formDeleteBtn.submit();
    }

    const handleUpdateOrCreateOrDelete = (action) => {
        const button = event.relatedTarget;
        let itemValue;
        if (button.getAttribute('data-id')) {
            itemValue = {
                id: button.getAttribute('data-id')
            }
        } else if (button.getAttribute('data-item')) {
            itemValue = button.getAttribute('data-item') === '' ? button.getAttribute('data-item') : JSON.parse(button.getAttribute('data-item'));
        }
        const typeValue = button.getAttribute('data-type');
        if (!itemValue) {
            if (typeValue == 'events') {
                itemValue = {
                    name: '',
                    content: '',
                    image: '',
                    open_date: '',
                    slogan: '',
                    end_date: ''
                }
            }
        }
        const handlePreviewImage = (e, action) => {
            const file = e.target.files[0];
            let previewImage = ''
            if (action === 'update') {
                updatePreviewImg.setAttribute('src', URL.createObjectURL(file))
                previewImage = 'update-preview-image'
                updateFormFieldImg.innerHTML = `<img alt = "" class = "${previewImage}" src="${updatePreviewImg.src}" style="width: 100%;" />`
                updateFormFieldImg.style.display = "block"
            } else if (action === 'create') {
                addPreviewImg.setAttribute('src', URL.createObjectURL(file))
                previewImage = 'add-preview-image'
                addFormFieldImg.innerHTML = `<img alt = "" class = "${previewImage}" src="${addPreviewImg.src}" style="width: 100%;" />`
                addFormFieldImg.style.display = "block"
            }
        }
        let htmlFull = ""
        for (const key in itemValue) {
            let keyId = '';
            let formField = '';
            let errorField = ''
            let {
                name_field,
                html,
                type_field,
                required_field
            } = handleFieldName(key);

            if (action === 'create') {
                itemValue[key] = '';
                keyId = 'add-' + key
                formField = `add-form-field-${key}`
                errorField = `add-${key}-error`
            } else if (action === 'delete') {
                modalBody.textContent = "Bạn có chắc chắn muốn xóa Event này không?"
                modalTitle.textContent = "Xóa Event"
                if (key != 'id' && key != 'image') {
                    continue;
                }
                if (key == 'image') {
                    type_field = 'text';
                }
                formField = `delete-form-field-${key}`
                errorField = `delete-${key}-error`
                keyId = 'delete-' + key;
            } else if (action === 'update') {
                if ((key == 'open_date' || key == 'end_date') && itemValue[key]) {
                    const time = itemValue[key].split(" ");
                    if (time.length >= 2) {
                        itemValue[key] = `${time[0]}T${time[1]}`
                    }
                }
                formField = `update-form-field-${key}`
                errorField = `update-${key}-error`
                keyId = 'update-' + key;
            }
            html = `<div class = "mb-3" style = "display: ${key== 'id' ? 'none' : 'block'}">
                <label for = "${keyId}" class = "form-label"> ${name_field} <span style="display: ${required_field ? 'inline-block' : 'none'}; color: red;">*</span>: </label>
                <input type = "${type_field}" id = "${keyId}" class = "form-control" name = "${key}" value = "${itemValue[key]}" />
                <div class="${errorField} text-error">${action === 'create' ? ' ' : ''}</div>
                <div class="${formField} mt-2" style=" display: ${key== 'image' && itemValue['id'] ? 'block' : 'none'};">
                    <img style="width: 100%;" alt = "" class = "${action ==='update' ?'update-preview-image' : 'add-preview-image'}" src="${key === 'image' ? '../image/events/' + itemValue[key]: ''}" />
                </div>
                </div>`
            htmlFull += html;
        }
        if (action === 'update') {
            if (itemValue['image']) {
                htmlFull += `<div style="display: none">
            <input type="text" value = "${itemValue['image']}" name="imageUrl"/></div>`
            }
            formEditBtn.innerHTML = htmlFull;
            if (validateFunc) {
                validateFunc('update')
            }
        } else if (action === 'create') {
            formAddBtn.innerHTML = htmlFull;
            if (validateFunc) {
                validateFunc('add')
            }
        } else if (action === 'delete') {
            formDeleteBtn.innerHTML = htmlFull;
        }

        const updatePreviewImg = document.querySelector(".update-preview-image");
        const addPreviewImg = document.querySelector(".add-preview-image");
        const updateFormFieldImg = document.querySelector(".update-form-field-image");
        const addFormFieldImg = document.querySelector(".add-form-field-image");
        const addImage = document.querySelector("#add-image");
        const updateImage = document.querySelector("#update-image");
        if (addImage) {
            addImage.onchange = (e) => {
                handlePreviewImage(e, action);
            }
        }
        if (updateImage) {
            updateImage.onchange = (e) => {
                handlePreviewImage(e, action);
            }
        }

    }
    DeleteModal.addEventListener('show.bs.modal', function(event) {
        handleUpdateOrCreateOrDelete('delete');
        deleteBtn.appendChild(spinner)
        validateFunc('delete');
    })
    EditModal.addEventListener('show.bs.modal', function(event) {
        handleUpdateOrCreateOrDelete('update');
        editBtn.appendChild(spinner)
        validateFunc('update')
    })
    CreateModal.addEventListener('show.bs.modal', function(event) {
        handleUpdateOrCreateOrDelete('create');
        addBtn.appendChild(spinner)
        validateFunc('add')
    })
    // DeleteModal.addEventListener('hidden.bs.modal', function(event) {
    //     formDeleteBtn.reset();
    //     deleteBtn.classList.remove("spinner-container")
    // })
    // EditModal.addEventListener('hidden.bs.modal', function(event) {
    //     formEditBtn.reset();
    //     editBtn.classList.remove("spinner-container")
    // })
    // CreateModal.addEventListener('hidden.bs.modal', function(event) {
    //     formAddBtn.reset();
    //     addBtn.classList.remove("spinner-container")
    // })
</script>

<?php include "../layout/validate.php" ?>
<?php include "../layout/spinner.php" ?>