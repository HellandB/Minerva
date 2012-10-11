package tables;

public class User {
	private long thirdPartId;
	private long id;
	private String email;

	public User() {
	}

	public long getThirdPartId() {
		return thirdPartId;
	}

	private void setThirdPartId(long thirdPartId) {
		this.thirdPartId = thirdPartId;
	}

	public long getId() {
		return id;
	}

	public void setId(long id) {
		this.id = id;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}
}
