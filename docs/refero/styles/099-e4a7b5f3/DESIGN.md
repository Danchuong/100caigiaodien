# 099 — Refero Style

- Refero URL: https://styles.refero.design/style/e4a7b5f3-f393-4f6d-b4a5-ecf874024bed
- Site URL: https://099.supply
- ID: e4a7b5f3-f393-4f6d-b4a5-ecf874024bed
- Theme: dark
- Industry: agency
- Created: 2026-03-09T13:13:07.000Z
- Ranks: newest: 1070, popular: 135, trending: 108

> Terminal aesthetic, digital workbench. The UI feels like a high-contrast monospaced terminal environment for creative tools.

## Description

This design system presents as a 'digital workbench' – dark, stark, and highly organized, creating an atmosphere of focused, technical precision. The reliance on extreme achromatic contrast combined with a monospace system font defines its aesthetic, making it feel less like a brand and more like an interface for a command-line tool. Sharp 10px corner radii on interactive elements provide a subtle softening against the otherwise rigid grid, allowing functional elements to feel grounded yet approachable.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Oil | #000000 | neutral | Page background, primary text on white surfaces, icon active state. This provides the deep, commanding backdrop for all content. |
| Ghost White | #ffffff | neutral | Primary text, headers, icons, button text. Provides maximum contrast against dark backgrounds for clear information hierarchy. |
| Steel Gray | #1d1d1d | neutral | Card backgrounds, selected button states, input fields. Creates a subtle, secondary surface level for interactive components and content blocks. |
| Muted Ash | #383838 | neutral | Outlined button borders, subtle dividers. A lighter gray for visual separation without being too jarring on dark surfaces. |
| Dim Gray | #888888 | neutral | Subtle text, secondary information, card borders for visual grouping. Used for less prominent content that still needs to be legible against dark backgrounds. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Soehne Mono | Space Mono, Fira Code | 400 | 16px | 1.00, 1.20, 1.40 | All text elements, including body copy, headings, and interactive elements. The consistent use of a monospace font across the entire UI is a signature choice, reinforcing the technical, command-line aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 19.2 | 0.24 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "10px",
    "inputs": "10px",
    "buttons": "10px",
    "default": "0px"
  },
  "elementGap": "16px",
  "sectionGap": "48px",
  "cardPadding": "",
  "pageMaxWidth": "1600px"
}
```

## Components

### Filter Button Group



### Product Card Grid



### Hero Info Card



### Text Button (Invisible)

**Role:** Primary interactive element for navigation and inline actions

Background: transparent, Text: Ghost White (#ffffff), Border: none, Padding: 0px. Used for 'Menu', 'Cart 0' in header.

### Ghost Button (Outlined)

**Role:** Secondary interactive element, filtering, or calls to action

Background: transparent, Text: Ghost White (#ffffff), Border: 1px solid Muted Ash (#383838), Border Radius: 10px, Padding: 19.2px 25.6px. Example: 'Show All', 'Mockups (M)'.

### Subtle Filled Button

**Role:** Tertiary action or selected state within a group

Background: Steel Gray (#1d1d1d), Text: Ghost White (#ffffff), Border: none, Border Radius: 10px, Padding: 19.2px 25.6px. Example: 'Components (C)' when selected.

### High-Contrast Filled Button

**Role:** Primary call to action in specific contexts (e.g., checkout)

Background: Ghost White (#ffffff), Text: Midnight Oil (#000000), Border: none, Border Radius: 10px, Padding: 19.2px 25.6px. (No visible example in screenshot, but specified in data).

### Content Card (Rounded)

**Role:** Container for product items or featured content

Background: transparent, Border Radius: 10px, Box Shadow: none, Padding: 0px. Used for product listings, allows content to define its own padding.

### Info Card (Padded)

**Role:** Descriptive content blocks, like hero text areas

Background: transparent, Border Radius: 0px, Box Shadow: none, Padding: 26.5px. Used for the main text description on the left.

### Elevated Card

**Role:** Interactive elements with a background to signify interaction or state

Background: Steel Gray (#1d1d1d), Border Radius: 10px, Box Shadow: none, Padding: 0px. Used for the product image 'T-Shirt (Bestseller)'.

### Text Input (Search)

**Role:** Form element for user input

Background: Steel Gray (#1d1d1d), Text: Ghost White (#ffffff), Border: none, Border Radius: 10px (left side), Padding: 6.4px 19.2px. Typically paired with a button.

## Do's

- Use Midnight Oil (#000000) as the primary page background color across all layouts.
- Always use the Soehne Mono font at 16px weight 400 for all text elements.
- Apply 10px border-radius to all interactive components like buttons, cards, and input fields.
- Maintain a clear visual hierarchy by limiting text colors to Ghost White (#ffffff) for primary information and Dim Gray (#888888) for secondary details.
- Ensure generous spacing: a minimum of 16px between elements and 26.5px internal padding for information cards.
- For content blocks, apply Steel Gray (#1d1d1d) for explicit background distinction, maintaining a 10px radius.

## Don'ts

- Do not use any chromatic colors; visuals must remain strictly achromatic.
- Avoid box shadows or complex elevation; depth is created through varying shades of gray and explicit borders.
- Do not introduce any additional font families; exclusively use Soehne Mono.
- Do not use border-radius values other than 0px or 10px.
- Do not vary line-height significantly from the base 1.2 or 1.4 for readability, especially on long blocks of text.
- Do not use images or graphics that break the high-contrast, dark mode aesthetic; ensure all visuals integrate seamlessly.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Both use a minimalist, grid-based aesthetic with strong emphasis on content, minimal ornamentation, and a focus on functionality over visual flair. |
| Command-line interfaces / Terminal UIs | The exclusive use of a monospace font, high achromatic contrast, and stark presentation evokes the utilitarian and technical aesthetic of a developer's terminal. |
| Linear | Similar disciplined use of dark mode, crisp typography, and subtle component variations to create a highly functional and polished application feel, though Linear uses more color. |
| Figma (dark mode) | Shares the dark, low-distraction visual environment for creative work, with clean lines and clear separation of interactive elements, although Figma has more chromatic range. |
| GitHub (dark mode) | Employs a similar high-contrast dark theme with a focus on code and text readability, leveraging monospace fonts and muted neutrals. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (primary): #ffffff (Ghost White)
- Background (page): #000000 (Midnight Oil)
- Background (card/input): #1d1d1d (Steel Gray)
- Border (ghost btn): #383838 (Muted Ash)
- Secondary Text: #888888 (Dim Gray)

### 3-5 Example Component Prompts
1. Create a product hero section: Full background is Midnight Oil (#000000). On the left, an Info Card: transparent background, 26.5px padding, containing '099 Supply' headline (Soehne Mono, 16px, #ffffff) and body text 'Discover digital tools...' (Soehne Mono, 16px, #ffffff). On the right, an Elevated Card: Steel Gray (#1d1d1d) background, 10px radius, image of a T-Shirt (0px padding), with 'T-Shirt (Bestseller)' below (Soehne Mono, 16px, #ffffff).
2. Create a Ghost Button: transparent background, text 'Show All' (Soehne Mono, 16px, #ffffff), 1px solid Muted Ash (#383838) border, 10px border radius, 19.2px vertical padding, 25.6px horizontal padding.
3. Create a product listing grid: Three columns, each item within a Content Card (transparent background, 10px radius, 0px padding). Product image within is 88x88px, then product title 'C 000 Theme Toggle' (Soehne Mono, 16px, #ffffff) and price 'From $9' (Soehne Mono, 16px, #888888), both below the image and left-aligned.
4. Create a Text Input: Steel Gray (#1d1d1d) background, 10px border radius (left side only, e.g., border-top-left-radius: 10px; border-bottom-left-radius: 10px;), text color Ghost White (#ffffff), font Soehne Mono 16px, 6.4px vertical padding, 19.2px horizontal padding.
5. Create an Info Card for details: transparent background, 26.5px padding, containing primary text '099 Supply' (Soehne Mono, 16px, #ffffff) and secondary text 'Discover digital tools...' (Soehne Mono, 16px, #ffffff).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925841682-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925841682-thumb.jpg |
