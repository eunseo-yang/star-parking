import React from "react";
import Link from "next/link";
import styled, { css } from "styled-components";

export default function Nav() {
  return (
    <>
      <NavBar>
        <ul>
          <li>
            <Link href="login">
              <a>
                <Button>로그인</Button>
              </a>
            </Link>
          </li>
        </ul>
      </NavBar>
    </>
  );
}

const NavBar = styled.nav`
  display: flex;
`;
const Button = styled.button``;
