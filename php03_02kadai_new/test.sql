UPDATE gs_an_table SET name='まるまる',email='test',age=29,naiyou='lalala' WHERE id=10
UPDATE gs_an_table SET name=:name,email=:email,age=:age,naiyou=:naiyou WHERE id=:id
/*この１文で修正できる*/