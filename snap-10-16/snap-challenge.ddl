create table task(
 	taskId binary(20) not null,
	taskTitle varchar(255) not null,
	taskStartDate datetime,
	taskDueDate datetime,
	taskStatus varchar(64) not null,
	taskPriority varchar(64) not null,
	taskDescription varchar(256),
	primary key(taskId)
)w

//* my answer (wrong)
select tweetContent from tweet;
select profileAtHandle from profile
inner join tweet on profile.profileAtHandle

//* Marty answer
select tweet.tweetContent, profile.profileAtHandle
from tweet
inner join `like` ON tweet.tweetId = like.likeTweetId
inner join profile ON like.likeProfileId = profile.profile.ID
where tweet.tweetID = UNHEX('0536faef082b454e9d444cdbe7887d7a');