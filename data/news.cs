using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Yvvyshop
{
    #region News
    public class News
    {
        #region Member Variables
        protected int _news_id;
        protected string _title;
        protected string _content;
        protected int _created;
        protected int _updated;
        protected string _issuer;
        #endregion
        #region Constructors
        public News() { }
        public News(string title, string content, int created, int updated, string issuer)
        {
            this._title=title;
            this._content=content;
            this._created=created;
            this._updated=updated;
            this._issuer=issuer;
        }
        #endregion
        #region Public Properties
        public virtual int News_id
        {
            get {return _news_id;}
            set {_news_id=value;}
        }
        public virtual string Title
        {
            get {return _title;}
            set {_title=value;}
        }
        public virtual string Content
        {
            get {return _content;}
            set {_content=value;}
        }
        public virtual int Created
        {
            get {return _created;}
            set {_created=value;}
        }
        public virtual int Updated
        {
            get {return _updated;}
            set {_updated=value;}
        }
        public virtual string Issuer
        {
            get {return _issuer;}
            set {_issuer=value;}
        }
        #endregion
    }
    #endregion
}