<?php

/**
 * gets the tweet by TweetDate
 *
 * @param \DateTime|string|null $newTweetDate tweet date as a DateTime object or string (or null to load the current time)
 * @throws \InvalidArgumentException if $newTweetDate is not a valid object or string
 * @throws \RangeException if $newTweetDate is a date that does not exist
 */
public static function getTweetByTweetDate (\PDO $pdo, $tweetId) : ?Tweet {
	try {
		$tweetDate = newTweetDate ('2ss000-01-01');
	} catch(InvalidArgumentException | RangeException | Exception | \TypeError $exception) {
		throw (new \PDOException(($exception->getMessage(), 0, $exception));
	}
	// create query template
	$query = "SELECT tweetId, tweetProfileId, tweetContent, tweetDate FROM tweet WHERE tweetDate = :tweetDate";
	$statement = $pdo->prepare($query);

	// bind the tweet id to the place holder in the template
	$parameters = ["tweetDate" => $tweetDate->getBytes()];
	$statement->execute($parameters);

	// grab the tweet from mySQL
	try {
		$tweet = null;
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		$row = $statement->fetch();
		if($row !== false) {
			$tweet = new Tweet($row["tweetId"], $row["tweetProfileId"], $row["tweetContent"], $row["tweetDate"]);
		}
	} catch(\Exception $exception) {
		// if the row couldn't be converted, rethrow it
		throw(new \PDOException($exception->getMessage(), 0, $exception));
	}
	return($tweet);
}