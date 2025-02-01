select *
from users;

select id
from roles
where name = 'Doctor';


select id
from users
where role_id in (select id
                  from roles
                  where name = 'Doctor');

select id
from users
where role_id in (select id
                  from roles
                  where name = 'Doctor')
limit 1;

select id from users where role_id in (
    select id
    from roles where name = 'Patient'
    )
limit 1;

select * from appointments;


describe  labs;

select id from appointments where status = 0;


select * from labs;