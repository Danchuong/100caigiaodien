# Folkert Gorter — Refero Style

- Refero URL: https://styles.refero.design/style/30b7dcc4-7f6e-413a-b6b5-dce60fed0acd
- Site URL: https://folkert.link
- ID: 30b7dcc4-7f6e-413a-b6b5-dce60fed0acd
- Theme: light
- Industry: other
- Created: 2026-04-30T01:44:32.170Z
- Ranks: newest: 529, popular: 821, trending: 692

> Terminal black-on-white grid

## Description

Folkert Gorter employs a stark, almost brutalist approach, reminiscent of early web interfaces or terminal UIs. The design emphasizes content over adornment, featuring a high-contrast achromatic palette with text-heavy layouts. Typography is functional and monospace-leaning, creating a spartan, technical feel. Minimalist borders and an absence of shadows highlight a flat-design ethos, where visual cues are direct and unembellished.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Yellow | #ffff00 | accent | Page background — a saturated, energetic base that amplifies the stark achromatic foreground elements |
| Ink Black | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Graphite | #404040 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Ash Gray | #999999 | neutral | Muted text elements, decorative borders, and subtle list item dividers, providing a tertiary level of visual hierarchy |
| Link Blue | #0064E1 | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Monument Grotesk Mono Variable | Space Mono | 400 | 13px | 1.30 | Primary UI text for links, body content, and lists. Its monospaced nature contributes to the utilitarian, code-like aesthetic. |
| -apple-system | system-ui | 400 | 15px | 1.65 | Secondary text used for general content and supplementary links, providing system-font accessibility where native monospaced options are less prevalent. |

## Spacing & Shape

```json
{
  "radius": {
    "default": "12.96px"
  },
  "elementGap": "6px",
  "sectionGap": "45px",
  "cardPadding": "26px",
  "pageMaxWidth": null
}
```

## Components

### Content Card

**Role:** Information container, project listing block

A rectangular container with a 1px 'Ink Black' border, a default radius of 12.96px, and internal padding of 26px around its content. Background defaults to 'Canvas Yellow'.

### Navigational Link List

**Role:** Primary navigation and project indexing

Lists of interactive links, each item has 6px left padding. Active/current items are distinguished by an 'Ink Black' border. Text is 'Monument Grotesk Mono Variable' at 13px, 400 weight.

### Section Heading

**Role:** Categorization of content groups

Simple text labels, typically 'Monument Grotesk Mono Variable' at 13px, 400 weight, in 'Graphite' or 'Ink Black', often found adjacent to a thin border.

### Project Metadata Text

**Role:** Supplemental information or descriptions

Uses '-apple-system' font at 15px, 400 weight, in 'Graphite', providing a slightly more readable, less stark contrast for secondary information.

## Do's

- Use 'Canvas Yellow' #ffff00 as the foundational background color for all page sections.
- Apply 'Ink Black' #000000 for primary text, structural borders, and the most prominent interactive states.
- Utilize 'Monument Grotesk Mono Variable' at 13px/1.30 line-height for all lists and core navigation items.
- Employ a sparse border radius, with a default of 12.96px for defining card-like containers, maintaining a rectilinear, functional aesthetic.
- Maintain high contrast (minimum 9.7:1) between text ('Ink Black' or 'Graphite') and 'Canvas Yellow' backgrounds.
- Use 26px for vertical and horizontal padding around distinct content blocks and inside card components.
- Differentiate clickable links and hover states with 'Link Blue' #0064E1 where color is permitted to break the achromatic palette.

## Don'ts

- Avoid using shadows or complex elevation; the design system relies on flat surfaces and high-contrast borders for separation.
- Do not introduce gradients; the system exclusively uses solid colors.
- Refrain from using decorative imagery or photography; the visual language is text-dominant and utilitarian.
- Do not vary font families beyond 'Monument Grotesk Mono Variable' and '-apple-system' for text content.
- Avoid using padding values other than 6px, 13px, 26px, 39px, 45px, 65px; consistency is built on these foundational units.
- Do not use color for emotional emphasis (e.g., green for success, red for error) unless explicitly defined; color is for brand and interaction only.
- Avoid large, editorial headlines; the system prefers compact, functional text sizes across the board.

## Layout

The page structure is full-bleed, adapting to the viewport width without a maximum content width, lending an expansive feel. The hero section often presents a centered, oversized, rotating text element over the 'Canvas Yellow' background. Content sections generally follow a vertical rhythm with distinct blocks of information using thin borders as dividers. Navigation appears as simple text lists horizontally or vertically. The overall density is spacious, with ample padding separating content elements.

## Imagery

Minimal imagery is present; the design prioritizes plain UI elements. When images are used, as seen in the project preview section, they appear as small, unstylized rectangular thumbnails. Iconography is extremely sparse, with a single instance of a classic comic character illustration used decoratively, not integrally. The system is text-dominant with visuals serving secondary, illustrative roles within content blocks rather than being primary drivers of engagement.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Shares a raw, functional, and user-generated content presentation with minimal styling and a focus on content blocks over elaborate UI. |
| Brendan Dawes | Similar high-contrast, minimalist aesthetic with heavy reliance on typography and simple, bold layout choices. |
| Cargo Site Builder | Given the 'cargo.site' domain in the description, it's structurally and visually aligned with the basic, configurable nature of Cargo websites. |
| Supersystem | Exhibits a similar stark, almost brutalist approach to web design, emphasizing content with minimal visual hierarchy and a direct interface. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffff00
border: #000000
accent: #ffff00
primary action: no distinct CTA color

Example Component Prompts:
Create a project index card: background #ffff00, 1px border #000000, 12.96px radius, 26px internal padding. Title 'Project XYZ' in Monument Grotesk Mono Variable, 13px, 400 weight, #000000. List items in Monument Grotesk Mono Variable, 13px, 400 weight, #000000, with 6px left padding.
Create a section divider: 1px solid border #000000 at full width.
Create a secondary text block: Text in -apple-system, 15px, 400 weight, #404040, with 45px top/bottom padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513457126-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513457126-thumb.jpg |
