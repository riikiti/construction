<div>
    <p> Телеграм: {{!empty($connect->tg) ? $connect->tg : "не указан"}}</p>
    <p> Телефон: {{!empty($connect->phone) ? $connect->phone  :"не указан"}}</p>
    <p> Комментарий: {{!empty($connect->comment)? $connect->comment :"не указан"}} </p>
    <p> Отпарвлен: {{!empty($connect->created_at)? $connect->created_at->format('d.m.Y H:i') :"не указана"}} </p>
</div>