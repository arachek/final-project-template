const dockCard = ({ time }) => {
    return (
        <div className="dock-card">
            <h3>{time.title}</h3>
            <p>{time.method}</p>
            <div className="availability">{time.availability}</div>
        </div>
    )
}

export default dockCard