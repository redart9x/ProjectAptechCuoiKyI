<style>
    .message-error,
    .name-error,
    .email-error,
    .text-error {
        color: red;
    }

    .input-error {
        border-color: red;
    }

    .input-error:focus {
        box-shadow: 0 0 0 0.25rem rgba(255, 0, 0, 0.2) !important;
        border-color: red;
    }
</style>
<script>
    const patternEmail = /\s*^[a-zA-Z0-9._-]{0,64}@(?=.{0,255}$)(?:[a-z0-9]((?:[a-zA-Z0-9-]*[a-zA-Z0-9])?[.]{1})+[a-zA-Z]{2,})\s*$/
    const userFeedbackForm = document.querySelector("#user-add-feedback-form");
    const adminAddEvent = document.querySelector(".admin-add-event-form");
    const adminUpdateEvent = document.querySelector(".admin-update-event-form");
    const adminAddBrand = document.querySelector(".admin-add-brand-form");
    // const email = document.querySelector("#email");
    const adminUpdateBrand = document.querySelector(".admin-update-brand-form");
    // const name = document.querySelector("#name");
    // const message = document.querySelector("#message");
    // const openDate = document.querySelector("#open_date");
    // const endDate = document.querySelector("#end_date");
    // const content = document.querySelector("#content");
    // const image = document.querySelector("#image");
    // const slogan = document.querySelector("#slogan");
    let allField = {}
    const setAllField = () => {
        allField = {
            // feedback form
            email: {
                field: document.querySelector("#email"),
                fieldError: document.querySelector(".email-error"),
                fieldMinlength: null,
                fieldMaxlenth: 255,
                patternField: patternEmail,
                fieldString: 'Địa chỉ Email'
            },
            name: {
                field: document.querySelector("#name"),
                fieldError: document.querySelector(".name-error"),
                fieldMinlength: null,
                fieldMaxlength: 80,
                patternField: null,
                fieldString: ''
            },
            message: {
                field: document.querySelector("#message"),
                fieldError: document.querySelector(".message-error"),
                fieldMinlength: 5,
                fieldMaxlength: 1000,
                patternField: null,
                fieldString: 'Feedback'
            },

            // update event form
            updateName: {
                field: document.querySelector("#update-name"),
                fieldError: document.querySelector(".update-name-error"),
                fieldMinlength: 1,
                fieldMaxlength: 255,
                patternField: null,
                fieldString: ''
            },

            updateOpenDate: {
                field: document.querySelector("#update-open_date"),
                fieldError: document.querySelector(".update-open_date-error"),
                fieldMinlength: 1,
                fieldMaxlength: 255,
                patternField: null,
                fieldString: ''
            },
            updateEndDate: {
                field: document.querySelector("#update-end_date"),
                fieldError: document.querySelector(".update-end_date-error"),
                fieldMinlength: 1,
                fieldMaxlength: 255,
                patternField: null,
                fieldString: ''
            },
            updateContent: {
                field: document.querySelector("#update-content"),
                fieldError: document.querySelector(".update-content-error"),
                fieldMinlength: 3,
                fieldMaxlength: 1000,
                patternField: null,
                fieldString: ''
            },
            updateSlogan: {
                field: document.querySelector("#update-slogan"),
                fieldError: document.querySelector(".update-slogan-error"),
                fieldMinlength: 1,
                fieldMaxlength: 255,
                patternField: null,
                fieldString: ''
            },

            // add event form
            addName: {
                field: document.querySelector("#add-name"),
                fieldError: document.querySelector(".add-name-error"),
                fieldMinlength: 1,
                fieldMaxlength: 255,
                patternField: null,
                fieldString: ''
            },

            addOpenDate: {
                field: document.querySelector("#add-open_date"),
                fieldError: document.querySelector(".add-open_date-error"),
                fieldMinlength: 1,
                fieldMaxlength: 255,
                patternField: null,
                fieldString: ''
            },
            addEndDate: {
                field: document.querySelector("#add-end_date"),
                fieldError: document.querySelector(".add-end_date-error"),
                fieldMinlength: 1,
                fieldMaxlength: 255,
                patternField: null,
                fieldString: ''
            },
            addContent: {
                field: document.querySelector("#add-content"),
                fieldError: document.querySelector(".add-content-error"),
                fieldMinlength: 3,
                fieldMaxlength: 1000,
                patternField: null,
                fieldString: ''
            },
            addImage: {
                field: document.querySelector("#add-image"),
                fieldError: document.querySelector(".add-image-error"),
                fieldMinlength: 1,
                fieldMaxlength: 255,
                patternField: null,
                fieldString: ''
            },
            addSlogan: {
                field: document.querySelector("#add-slogan"),
                fieldError: document.querySelector(".add-slogan-error"),
                fieldMinlength: 1,
                fieldMaxlength: 255,
                patternField: null,
                fieldString: ''
            },
        }
    }
    setAllField();
    const submitFeedback = document.querySelector(".submit-feedback");
    const updateEventBtn = document.querySelector(".update-event");
    const addEventBtn = document.querySelector(".add-event");

    const handleValidField = (field, fieldError, minlength, maxlength, patternField = null, fieldString = "") => {
        if (field.value.trim() === "") {
            fieldError.textContent = "Đây là trường bắt buộc!";
            field.classList.add("input-error");
        } else if (minlength && field.value.trim().length < minlength) {
            fieldError.textContent = `Tối thiểu ${minlength} ký tự`;
            field.classList.add("input-error");
        } else if (maxlength && field.value.trim().length > maxlength) {
            fieldError.textContent = `Tối đa ${maxlength} ký tự`;
            field.classList.add("input-error");
        } else if (!patternField) {
            fieldError.textContent = "";
            field.classList.remove("input-error");
        } else {
            if (!patternField.test(field.value)) {
                fieldError.textContent = `${fieldString} không đúng định dạng!`;
                field.classList.add("input-error");
            } else {
                fieldError.textContent = "";
                field.classList.remove("input-error");
            }
        }
        if (userFeedbackForm) {
            if (allField.name.fieldError.textContent === "" && allField.email.fieldError.textContent === "" && allField.message.fieldError.textContent === "") {
                submitFeedback.disabled = false;
            } else {
                submitFeedback.disabled = true;
            }
        } else if (adminAddEvent && action === 'add') {
            if (allField.addName.fieldError.textContent === "" && allField.addContent.fieldError.textContent === "" && allField.addImage.fieldError.textContent === "" && allField.addOpenDate.fieldError.textContent === "" && allField.addSlogan.fieldError.textContent === "" && allField.addEndDate.field.value > allField.addOpenDate.field.value) {
                addEventBtn.disabled = false;
            } else {
                if (allField.addEndDate.field.value < allField.addOpenDate.field.value && allField.addEndDate.field.value != '' && allField.addOpenDate.field.value != '') {
                    allField.addOpenDate.fieldError.textContent = 'Thời gian bắt đầu phải < kết thúc!'
                    allField.addOpenDate.field.classList.add("input-error");
                } else {
                    allField.addEndDate.fieldError.textContent = ''
                    allField.addEndDate.field.classList.remove("input-error");
                }
                addEventBtn.disabled = true;
            }
        } else if (adminUpdateEvent && action === 'update') {
            if (allField.updateName.fieldError.textContent === "" && allField.updateContent.fieldError.textContent === "" && allField.updateOpenDate.fieldError.textContent === "" && allField.updateSlogan.fieldError.textContent === "" && allField.updateEndDate.field.value > allField.updateOpenDate.field.value) {
                updateEventBtn.disabled = false;
            } else {
                if (allField.updateEndDate.field.value < allField.updateOpenDate.field.value  && allField.addEndDate.field.value != '' && allField.addOpenDate.field.value != '') {
                    allField.updateOpenDate.fieldError.textContent = 'Thời gian bắt đầu phải < kết thúc!'
                    allField.updateOpenDate.field.classList.add("input-error");
                } else {
                    allField.updateOpenDate.fieldError.textContent = ''
                    allField.updateOpenDate.field.classList.remove("input-error");
                }
                updateEventBtn.disabled = true;
            }
        }
    }
    let action = ''
    const validateFunc = (actionParam = '') => {
        setAllField()
        action = actionParam;
        for (const key in allField) {
            if (!allField[key].field || !allField[key].field.id.includes(action)) {
                continue;
            }
            allField[key].field.addEventListener('blur', e => {
                handleValidField(allField[key].field, allField[key].fieldError, allField[key].fieldMinlength, allField[key].fieldMaxlength, allField[key].patternField, allField[key].fieldString);
            })
            allField[key].field.addEventListener('input', e => {
                handleValidField(allField[key].field, allField[key].fieldError, allField[key].fieldMinlength, allField[key].fieldMaxlength, allField[key].patternField, allField[key].fieldString);
            })
        }
    }
    validateFunc();
</script>