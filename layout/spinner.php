<style>
    .spinner-small .spinner-border {
        width: 1rem !important;
        height: 1rem !important;
    }

    .spinner-border {
        display: none;
    }

    .spinner-container.loading .spinner-border {
        display: inline-block;
    }
</style>

<script>
    // const spinnerContainer = document.querySelector(".spinner-container");
    const spinner = document.createElement("div")
    spinner.classList.add("spinner-border")
    // spinnerContainer.appendChild(spinner);
</script>