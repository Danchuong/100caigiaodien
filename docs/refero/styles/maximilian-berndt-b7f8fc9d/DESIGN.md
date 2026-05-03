# Maximilian Berndt — Refero Style

- Refero URL: https://styles.refero.design/style/b7f8fc9d-ce0c-45ce-aad7-f56380bb2d28
- Site URL: https://maximilianberndt.com
- ID: b7f8fc9d-ce0c-45ce-aad7-f56380bb2d28
- Theme: light
- Industry: design
- Created: 2026-04-30T02:14:21.289Z
- Ranks: newest: 411, popular: 1122, trending: 1076

> Typewritten document on crisp paper.

## Description

Maximilian Berndt's site presents an austere, high-contrast textual experience, reminiscent of a command-line interface or a minimalist resume. The design prioritizes content and readability with a stark black on white palette, punctuated only by subtle gray for secondary information. Components are invisible until interacted with or until a clear function is needed, maintaining a paper-like simplicity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #fdfdfd | neutral | Page backgrounds, card surfaces, element borders, ghost button text (inactive states) |
| Ink Black | #16161d | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Absolute Black | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Subtle Gray | #737377 | neutral | Section headings, muted body text, secondary information |
| Whisper Gray | #a1a1a3 | neutral | Tertiary text, descriptive labels, very subtle accents |

## Spacing & Shape

```json
{
  "radius": {
    "all": "0px"
  },
  "elementGap": "4px",
  "sectionGap": "48px",
  "cardPadding": "36px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Text Button

**Role:** Invisible until hover, text-only navigation and informational buttons.

Background transparent (rgba(0,0,0,0)), text is Canvas White (#fdfdfd), border is Canvas White (#fdfdfd). Padding is 0px all around. This button appears as pure text and only activates visually on hover/focus.

### Content Card

**Role:** Container for lists of work, skills, or clients.

Background is Canvas White (#fdfdfd), no shadow, border-radius 0px. Internal padding of 36px on the left and right. Text within uses Ink Black (#16161d).

### Interactive List Item

**Role:** Styled list items that highlight on interaction, typically links.

Text in Ink Black (#16161d). Features 1px padding top/bottom and 4px column gap for internal spacing. Borders appear on interaction, defined by Ink Black.

## Do's

- Prioritize text content with a high contrast ratio of Ink Black (#16161d) on Canvas White (#fdfdfd) for primary information.
- Use Subtle Gray (#737377) for all categorical section headings (e.g., 'Work', 'Skills', 'Clients').
- Employ a 'ghost' button style with transparent background and Canvas White (#fdfdfd) text/border for all interactive controls that should blend into the background.
- Maintain a strict 0px border-radius across all UI elements to reinforce the austere, document-like aesthetic.
- Structure content in distinct, vertically stacked sections, each beginning with a Subtle Gray (#737377) heading.
- Use 4px as the primary horizontal and vertical gap between related inline elements.
- Pad content cards with 36px on the left and right, ensuring a consistent internal margin for list items and data.

## Don'ts

- Avoid using any colored backgrounds or gradients; maintain the crisp white canvas.
- Do not introduce any drop shadows or complex elevation; surfaces should remain flat.
- Never use rounded corners on any UI element; all corners must be sharp.
- Do not deviate from the specified gray palette for text; avoid vibrant or saturated colors for content.
- Do not add any additional padding to ghost buttons; they should appear as raw text until interacted with.

## Layout

The page follows a minimalist, single-column document-style layout. Content is centered within an implied maximum width, though no explicit pageMaxWidth is set, creating the impression of content floating on an infinite white canvas. The hero section displays the name and title, followed by distinct sections for 'Work', 'Skills', and 'Clients', each marked with a muted gray heading. Navigation is extremely sparse, consisting only of a few links in the header and footer. Vertical rhythm is established through consistent spacing between content blocks and list items.

## Imagery

No imagery is present on the site. The visual system relies entirely on typography and structured text to convey information and establish hierarchy. There are no icons or illustrative elements.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Emphasizes raw content and text links on a white background with minimal ornamentation. |
| Superlist | Uses a stark, high-contrast, text-dominant interface with strong focus on hierarchy and negative space. |
| Read.cv | Features a resume-like presentation with a strong emphasis on typography, list structures, and a lack of visual flourishes. |
| Linear | Exhibits a clean, functional aesthetic with high contrast text and a focus on content over decorative elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #16161d
background: #fdfdfd
border: #fdfdfd (ghost), #16161d (interactive element borders)
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a section heading: 'Clients' in Subtle Gray (#737377).
2. Create a ghost navigation button: 'Info' with text color Canvas White (#fdfdfd) and border color Canvas White (#fdfdfd), no padding, 0px radius.
3. Create an interactive list item for a project: 'Vast' in Ink Black (#16161d), 1px vertical padding, with a border (Ink Black, #16161d) appearing on hover/focus, 0px radius.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515246596-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515246596-thumb.jpg |
