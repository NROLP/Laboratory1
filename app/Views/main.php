<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Laboratory 1</title>
</head>

<body>
        <form action="/save" method="post">

        <input type="hidden" name="id" value="<?= isset($gear4['id']) ? $gear4['id'] : '' ?>">

        <label>StudentName</label>
        <input type="text" name="StudentName" placeholder="StudentName" value="<?= isset($gear4['StudName']) ? $gear4['StudName'] : '' ?>">

        <label>Gender</label>
        <input type="text" name="Gender" placeholder="Gender" value="<?= isset($gear4['StudGender']) ? $gear4['StudGender'] : '' ?>">

        <label>Course</label>
        <input type="text" name="Course" placeholder="Course" value="<?= isset($gear4['StudCourse']) ? $gear4['StudCourse'] : '' ?>">

        <label>Section</label>
        <select id="StudSection" name="Section">
            <option value="" disabled selected>Select Section</option>
        <?php foreach ($gear5 as $nika): ?>
            <option value="<?= $nika['Section'] ?>" <?= (isset($gear4['StudSection']) && $gear4['StudSection'] == $nika['Section']) ? 'selected' : '' ?>>
                <?= $nika['Section'] ?>
            </option>
        <?php endforeach; ?>

        <label>Year</label>
        <input type="number" name="Year" placeholder="Year" value="<?= isset($gear4['StudYear']) ? $gear4['StudYear'] : '' ?>">

        <input type="submit" value="save">
</form>

        <ul>
            <ul>Student Name</ul>
            <ul>Gender</ul>
            <ul>Course</ul>
            <ul>Section</ul>
            <ul>Year</ul>
            <ul>Action</ul>
        </ul>

        <?php foreach ($gear3 as $in): ?> <!-- Display DATA from database -->
        <ul>
            <ul><?= $in['StudName']    ?></ul>
            <ul><?= $in['StudGender']  ?></ul>
            <ul><?= $in['StudCourse']  ?></ul>
            <ul><?= $in['StudSection'] ?></ul>
            <ul><?= $in['StudYear']    ?></ul>
            <ul><a href="/delete/<?= $in['id'] ?>">delete</a> <a href="/edit/<?= $in['id'] ?>">edit</a> </ul>
        </ul>
        <?php endforeach; ?>

</body>
</html>