<script>
const logFileText = async file => {
    const response = await fetch(file)
    const text = await response.text()
    console.log(text)
}

logFileText('/etc/passwd')

</script>
