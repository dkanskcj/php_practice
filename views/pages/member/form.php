<!DOCTYPE html>
<html lang="en"><br>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP 입문</title>
    <script>
        function check_input() {
            if (!document.member.id.value) {
                alert("아이디를 입력하세요!");
                document.member.id.focus();
                return;
            }
            if (!document.member.pass.value) {
                alert("비밀번호를 입력하세요!");
                document.member.pass.focus();
                return;
            }
            if (!document.member.pass_confirm.value) {
                alert("비밀번호 확인을 입력하세요!");
                document.member.pass_confirm.focus();
                return;
            }
            if (!document.member.name.value) {
                alert("이름을 입력하세요!");
                document.member.name.focus();
                return;
            }
            if (!document.member.email.value) {
                alert("이메일 주소를 입력하세요!");
                document.member.email.focus();
                return;
            }
            if (document.member.pass.value != document.member.pass_confirm.value) {
                alert("비밀번호가 일치하지 않습니다.\n 다시 입력해 주세요");
                document.member.pass.focus();
                document.member.pass.select();
                return;
            }
            document.member.submit();
        }

        function reset_form() {
            document.member.id.value = "";
            document.member.pass.value = "";
            document.member.pass_confirm.value = "";
            document.member.name.value = "";
            document.member.email.value = "";
            document.member.id.focus();
            return;
        }

        function check_id() {
            window.open("check_id.php?id=" + document.member.id.value,
                "IDcheck",
                "left=700, top=300, width=380, height=160, scrollbars=no, resizable=yes");
        }
    </script>
</head>

<body>
    <div class="w-full h-full p-20 flex justify-start">
        <form action="insert.php" method="post" name="member" class="w-full">
            <div class="w-full h-full flex flex-col space-y-2">
                <h2 class="text-lg pb-2 text-bold">회원가입</h2>
                <div class="w-full border border-b border-black"></div>
                <div class="flex items-top gap-2">
                    <div class="space-y-2">
                        <li class="flex w-[20rem] justify-between items-center gap-2">
                            <span class="col1">아이디</span>
                            <span class="col2"><input type="text" name="id" class="border borderw-b px-3 py-2 shadow-md rounded-md"></span>
                        </li>
                        <li class="flex w-[20rem] justify-between items-center gap-2">
                            <span class="col1">비밀번호</span>
                            <span class="col2"><input type="text" name="id" class="border borderw-b px-3 py-2 shadow-md rounded-md"></span>
                        </li>
                        <li class="flex w-[20rem] justify-between items-center gap-2">
                            <span class="col1">비밀번호 확인</span>
                            <span class="col2"><input type="text" name="id" class="border borderw-b px-3 py-2 shadow-md rounded-md"></span>
                        </li>
                        <li class="flex w-[20rem] justify-between items-center gap-2">
                            <span class="col1">이름</span>
                            <span class="col2"><input type="text" name="id" class="border borderw-b px-3 py-2 shadow-md rounded-md"></span>
                        </li>
                        <li class="flex w-[20rem] justify-between items-center gap-2">
                            <span class="col1">이메일</span>
                            <span class="col2"><input type="text" name="id" class="border borderw-b px-3 py-2 shadow-md rounded-md"></span>
                        </li>
                    </div>
                    <div>
                        <button type="button" class="border border-b px-3 py-2 rounded-md shadow-md border-yellow-500 text-yellow-400 bg-yellow-50 hover:opacity-80" onclick="check_id()">중복체크</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>