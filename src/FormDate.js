import TableContainer from "@material-ui/core/TableContainer";
import Table from "@material-ui/core/Table";
import TableHead from "@material-ui/core/TableHead";
import TableBody from "@material-ui/core/TableBody";
import TableRow from "@material-ui/core/TableRow";
import TableCell from "@material-ui/core/TableCell";
import styles from "./FormDate.module.css";

export const FormDate = (props) => {
  const { data } = props;

  const filterDate = (e) => {
    e.preventDefault();
    alert("You had clicked me")
  };

  return (
    <div className={styles.MainContainer}>
      <form onSubmit={filterDate}>
        <div className={styles.FormContainer}>
          <label htmlFor="meeting">Meeting Date: </label>
          <input
            className={styles.InputDate}
            defaultValue="20-03-2019"
            type="date"
            onChange=""
          />
          <button className={styles.BtnFilter}>Filter</button>
        </div>
      </form>
      <TableContainer>
        <Table className={styles.TableWith} aria-label="simple table">
          <TableHead>
            <TableRow>
              <TableCell>Date:</TableCell>
              <TableCell align="right">Title:</TableCell>
              <TableCell align="right">Description:</TableCell>
            </TableRow>
          </TableHead>
          <TableBody>
            {data.map((d) => (
              <TableRow key={d.id}>
                <TableCell align="left">{d.date}</TableCell>
                <TableCell align="right">{d.title}</TableCell>
                <TableCell align="right">{d.description}</TableCell>
              </TableRow>
            ))}
          </TableBody>
        </Table>
      </TableContainer>
    </div>
  );
};
