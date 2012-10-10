package tables;

public class Rating {
	private long userId;
	private int rating;

	public Rating() {
	}

	public long getUserId() {
		return userId;
	}

	private void setUserId(long userId) {
		this.userId = userId;
	}

	public int getRating() {
		return rating;
	}

	public void setRating(int rating) {
		this.rating = rating;
	};
}
