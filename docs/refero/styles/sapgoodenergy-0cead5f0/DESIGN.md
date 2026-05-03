# SAPGOODENERGY — Refero Style

- Refero URL: https://styles.refero.design/style/0cead5f0-0a56-401f-b637-81d1fe457259
- Site URL: https://sapgoodenergy.com
- ID: 0cead5f0-0a56-401f-b637-81d1fe457259
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T00:23:30.470Z
- Ranks: newest: 813, popular: 802, trending: 629

> Athletic Minimalism: black ink on white canvas, with bursts of energetic orange.

## Description

SAPGOODENERGY uses a high-contrast athletic minimalism: stark black typography on vast white canvases, punctuated by a single vibrant orange accent. The design leans into raw energy, with strong sans-serifs and a focus on essential information. Large, generous spacing emphasizes content and creates a focused, almost clinical, presentation. Elements are clean-edged, with soft rounded corners on interactive components providing a subtle human touch.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, major headlines, prominent borders, primary buttons — creating a bold, assertive presence |
| Canvas White | #ffffff | neutral | Main page background, card backgrounds, white text on dark surfaces |
| Alabaster | #fffffb | neutral | Subtle background for UI elements, slightly off-white to distinguish from pure canvas |
| Ash Grey | #e7e7e7 | neutral | Card backgrounds, subtle fills, secondary borders |
| Graphite | #303030 | neutral | Secondary text, subtle borders, UI elements that need to be present but not dominant |
| Pewter | #c0c0c0 | neutral | Muted text, placeholder text, disabled states, subtle graphic elements |
| Slate | #707070 | neutral | Helper text, less prominent body copy, lower-contrast UI elements |
| Energy Burst Orange | #ff7840 | brand | Call-to-action buttons, active navigation indicators — a singular vivid accent color to drive interaction |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GT Pressura LC Standard | Inter | 400, 500, 600, 700 | 10px, 13px, 14px, 16px, 24px | 1.00, 1.08, 1.13, 1.14, 1.20, 1.60 | Primary text for body, links, navigation, and input fields. Its geometric sans-serif quality supports the site's modern, straightforward feel. |
| Helvetica Neue LT Std | Arial | 500, 800 | 14px, 18px, 30px, 38px, 53px, 56px | 1.00, 1.03, 1.11, 1.60 | Used for prominent headlines and buttons, conveying authority and impact. The tighter letter-spacing on larger sizes creates a condensed, powerful visual. |
| GTStandard-M | Montserrat | 500 | 14px | 1.50 | A secondary display font, used sparingly for specific headings or branding elements to add textural variation without deviating from the overall sans-serif aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.6 |  |
| heading | 24 | 1.2 |  |
| heading-lg | 30 | 1.11 |  |
| display | 56 | 1 | -0.672 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "18px",
    "inputs": "7px",
    "buttons": "7px",
    "interactiveElements": "14px",
    "smallInteractiveElements": "4px"
  },
  "elementGap": "4px",
  "sectionGap": "100px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Filled button

Solid 'Energy Burst Orange' background (#ff7840) with 'Canvas White' text (#ffffff). Features a 7px border-radius and generous horizontal padding (0px top/bottom, 32px left/right). Text uses Helvetica Neue LT Std 14px weight 800.

### Secondary Ghost Button

**Role:** Outlined/ghost button

Transparent background with 'Midnight Ink' text (#000000) and 'Midnight Ink' border (#000000). No border-radius, maintaining sharp edges. Text uses GT Pressura LC Standard 14px weight 500.

### Tertiary Ghost Button

**Role:** Outlined/ghost button (muted)

Transparent background with muted 'Graphite' text (rgba(0, 0, 0, 0.81)) and matching border. No border-radius. Used for less prominent calls to action. Text uses GT Pressura LC Standard 14px weight 500.

### Callout Card

**Role:** Informational card with soft background

Features a semi-transparent 'Alabaster' background (oklab(0.999994 0.0000455678 0.0000200868 / 0.3)) with an 18px border-radius. Padding is 24px top, 21px left/right, 30px bottom.

### Content Card

**Role:** Container card

'Ash Grey' background (#e7e7e7) with an 18px border-radius. No explicit padding applied directly to the card container, intended for content to define its own spacing within.

### Text Input (with placeholder)

**Role:** Form input field

Background is a subtle 'Midnight Ink' tint (rgba(0, 0, 0, 0.1)) with 'Midnight Ink' text (#000000). Features a 9px border-radius. Placeholder text is 'Pewter'. Padding is 0px top/bottom, 16px left.

### Adhesion Banner

**Role:** Sticky promotional banner

Left-aligned banner with a solid 'Energy Burst Orange' background (#ff7840). Text is 'Canvas White' (#ffffff) using GT Pressura LC Standard 14px weight 700. Features a 7px border-radius.

## Do's

- Prioritize 'Midnight Ink' (#000000) for all primary text and calls to action on 'Canvas White' (#ffffff) backgrounds.
- Use 'Energy Burst Orange' (#ff7840) exclusively for primary action elements like CTA buttons and key highlights.
- Employ a 7px border-radius for all interactive elements like buttons and input fields.
- Maintain generous horizontal padding (e.g., 32px) around primary buttons to give them breathing room.
- Utilize 'Ash Grey' (#e7e7e7) and 'Alabaster' (oklab blend) for background surfaces that need to subtly stand out from 'Canvas White' (#ffffff).
- Apply tighter letter-spacing (-0.05em, -0.04em) to large 'Helvetica Neue LT Std' headlines to create a dense, impactful visual.
- Ensure consistent spacing for inner card content with 24px top, 21px left/right, and 30px bottom for Callout Cards.

## Don'ts

- Avoid introducing new chromatic colors; 'Energy Burst Orange' (#ff7840) is the sole accent.
- Do not use gradients; the system relies on solid colors for clear, direct communication.
- Do not use overly decorative elements; keep the aesthetic clean and functional.
- Avoid small text sizes for 'Helvetica Neue LT Std'; reserve it for impactful headlines and buttons.
- Do not vary border-radius significantly; adhere to 7px for interactive elements and 18px for larger containers.
- Avoid crowded layouts; prioritize ample white space between sections and elements.
- Do not mix font families within a single element where one family would suffice; leverage weight variations within GT Pressura LC Standard and Helvetica Neue LT Std.

## Similar Brands

| Business | Why |
| --- | --- |
| Aesthetic fitness brands (e.g. Ten Thousand) | High-contrast typography, minimalist layout, and a singular accent color against a clean white background. |
| High-end direct-to-consumer athletic wear | Focus on product imagery, ample white space, and a premium, clean visual without excessive ornamentation. |
| Modern tech-focused e-commerce | Strong sans-serif typography, restrained color palette, and clear, functional component design. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #ff7840
primary action: #ff7840 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #ff7840 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a Callout Card: oklab(0.999994 0.0000455678 0.0000200868 / 0.3) background, 18px border-radius, 24px top, 21px left/right, 30px bottom padding. Place a 'Midnight Ink' (#000000) heading (Helvetica Neue LT Std 30px weight 500) inside.
3. Create a secondary ghost button: transparent background, 'Midnight Ink' (#000000) text and border, 0px border-radius, GT Pressura LC Standard 14px weight 500.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508581888-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508581888-thumb.jpg |
