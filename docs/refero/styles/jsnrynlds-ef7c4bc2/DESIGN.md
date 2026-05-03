# Jsnrynlds — Refero Style

- Refero URL: https://styles.refero.design/style/ef7c4bc2-f75d-4198-8be3-52af5be494ac
- Site URL: https://jsnrynlds.com
- ID: ef7c4bc2-f75d-4198-8be3-52af5be494ac
- Theme: dark
- Industry: design
- Created: 2026-04-30T03:29:56.505Z
- Ranks: newest: 137, popular: 1108, trending: 1112

> architectural blueprint on dark slate

## Description

Jsnrynlds employs a sophisticated dark-mode aesthetic with a minimalist footprint. Content is presented on dark charcoal backgrounds with accents of off-white text and subtle cool-toned greens.  Components are lightweight, favoring ghost styles and thin borders over heavy fills, creating a sense of understated elegance. The overall impression is one of clarity and focused information delivery.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Midnight | #181818 | neutral | Page backgrounds, card surfaces, primary dark canvas |
| Cloud Whisper | #eeeeee | neutral | Primary text, prominent headings, key UI elements, and ghost button text |
| Steel Gaze | #696969 | neutral | Secondary text, muted helper information, and subtle borders |
| Pale Ash | #898989 | neutral | Muted list items, subtle decorative elements, and borders for less prominent information |
| Deep Sea Teal | #225757 | accent | Accent surface for specific cards and decorative blocks — a cool, muted tone providing visual variation within the dark theme |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Suisse Intl Book | Open Sans | 400, 500 | 13px, 16px | 1.60 | Primary body text, button labels, link text, list items, and general interface text. Weight 400 is standard for readability, while 500 subtly emphasizes certain content. |
| Suisse Intl | Open Sans | 400 | 24px | 1.20 | Main headings and section titles, providing a distinct, slightly condensed look. |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "links": "8px",
    "other": "12px",
    "buttons": "999px"
  },
  "elementGap": "8px",
  "sectionGap": "72px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Interactive elements for secondary actions.

Text in Cloud Whisper (#eeeeee) on a transparent background, with a 1px Cloud Whisper (#eeeeee) border at 10% opacity on the top edge only. Features a 999px border-radius (pill shape) and 11px vertical, 16px horizontal padding. Letter-spacing is normal.

### Dark Surface Card

**Role:** Container for content, particularly portfolio items.

Background in Deep Midnight (#181818), with a 12px border-radius and no internal padding. Elevation is flat (no box-shadow).

### Accent Surface Card

**Role:** Highlighted content container or thematic grouping.

Background in Deep Sea Teal (#225757), with a 12px border-radius and no internal padding. Elevation is flat (no box-shadow).

### Main Heading

**Role:** Primary labels for sections and key information.

Uses Suisse Intl, weight 400, size 24px, line-height 1.2, color Cloud Whisper (#eeeeee), with -0.24px letter-spacing.

### Body Text

**Role:** Standard textual content.

Uses Suisse Intl Book, weight 400, size 16px, line-height 1.6, color Cloud Whisper (#eeeeee).

### Muted Body Text

**Role:** Secondary and less prominent textual content.

Uses Suisse Intl Book, weight 400, size 16px, line-height 1.6, color Steel Gaze (#696969).

## Do's

- Prioritize Deep Midnight (#181818) for all primary background surfaces.
- Use Cloud Whisper (#eeeeee) exclusively for primary text and significant UI elements.
- Apply a 999px border-radius to all interactive buttons for a pill-like shape.
- Maintain a compact element spacing of 8px around most interactive and informational elements.
- Utilize 12px border-radius for all cards and container elements.
- Employ ghost button styling (transparent background, #eeeeee text, subtle top border) for all secondary actions.
- Use Suisse Intl Book and Suisse Intl consistently, adhering to specified weights and letter-spacing for each role.

## Don'ts

- Avoid using heavy shadows or strong elevation effects; surfaces should remain flat.
- Do not introduce bright, saturated colors unless for a very specific, isolated accent like Deep Sea Teal (#225757).
- Do not use generic system fonts; stick to Suisse Intl variants to maintain brand consistency.
- Avoid large, prominent filled buttons; prefer ghost or text-only interactive elements.
- Do not deviate from the established spacing scale for element and component gaps.
- Avoid applying padding directly inside cards; contained elements manage their own spacing.
- Do not use highly contrasting or vibrant brand colors in the core UI; keep the palette muted and dark-centric.

## Layout

The page uses a contained layout with a dark, full-bleed background for the main canvas. The hero section presents a two-column split with text on the left and a dense block of content cards on the right. Content sections generally follow a grid pattern, showcasing cards within a largely monochrome environment. Vertical rhythm is established through consistent 72px section gaps. Navigation is minimal, consisting of embedded links within the main content flow and a utility navigation in the footer. The layout feels compact yet breathable, making efficient use of space.

## Imagery

Imagery primarily consists of contained, often square or rectangular product shots and headshots, frequently presented in grayscale or with desaturated tones. There are also abstract, painterly textures used as background elements within cards. Images are typically isolated, without overlapping elements, and use a 12px border-radius on cards, and 8px for smaller interactive elements. The overall density is balanced, allowing imagery to break up text blocks without dominating the layout.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Dark-mode UI with sharp typography and minimal, functional splashes of color. |
| Figma (dark mode) | Heavy reliance on dark neutrals and off-white text, with occasional muted accent colors for functional elements. |
| Raycast | Command-line interface aesthetic applied to a GUI, featuring compact typography and subtle visual hierarchy through surfaces rather than shadows. |
| Supabase | Predominantly dark interface, subtle use of colors to highlight interactive states, and a focus on content clarity. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #eeeeee
- background: #181818
- border: #eeeeee (10% opacity for ghost buttons)
- accent: #225757
- primary action: no distinct CTA color

Example Component Prompts:
- Create a section divider using Deep Midnight background (#181818), an 8px rowGap, and a horizontal rule that is 1px high, full width, and uses Steel Gaze (#696969).
- Design a Ghost Button: Suisse Intl Book 400, 16px, line-height 1.6, Cloud Whisper text (#eeeeee). Transparent background. 1px Cloud Whisper border (#eeeeee) at 10% opacity, only on the top edge. 999px border-radius. Padding 11px vertical, 16px horizontal.
- Build a Dark Surface Card: background Deep Midnight (#181818), 12px border-radius. No internal padding. Place a Muted Body Text (Suisse Intl Book 400, 16px, line-height 1.6, Pale Ash #898989) inside it, with 8px margin from the card's edge.
- Create a Heading using Suisse Intl 400, 24px, line-height 1.2, Cloud Whisper text (#eeeeee), with -0.24px letter-spacing (for 'Jason Reynolds').

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519779021-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519779021-thumb.jpg |
