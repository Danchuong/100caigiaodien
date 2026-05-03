# Google — Refero Style

- Refero URL: https://styles.refero.design/style/472efe17-8f2b-4e54-81c9-ccd956d0a519
- Site URL: https://orbita.coffee/en
- ID: 472efe17-8f2b-4e54-81c9-ccd956d0a519
- Theme: dark
- Industry: ai
- Created: 2026-04-30T02:25:55.022Z
- Ranks: newest: 372, popular: 1193, trending: 1184

> Midnight terminal, functional luminance.

## Description

Google's dark-themed search interface embodies a 'midnight terminal' aesthetic, prioritizing clarity and direct interaction. It features a stark dark background, softened by subtle grays for surfaces and interactive elements. Typography is direct and functional, leveraging a system font for most content and custom faces for key brand elements. The design emphasizes clean, rounded forms for interactive components, punctuated by a single, prominent shade of blue that highlights active states and critical links without overwhelming the muted palette. The overall impression is one of efficiency and focused interaction, free from decorative flourishes.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Carbon Black | #16171a | neutral | Page and section backgrounds, base canvas |
| Charcoal Grey | #303134 | neutral | Button backgrounds, elevated surfaces, search input background |
| Graphite | #4d5156 | neutral | Mid-tone panel surface for subdued dark UI layers and secondary containers. Do not promote it to the primary CTA color |
| Silver Mist | #e8e8e8 | neutral | Primary text color for headlines and interface labels, icon fills, prominent borders |
| Ash Grey | #9aa0a6 | neutral | Secondary text, muted helper text, inactive icon fills |
| Cool Steel | #bfbfbf | neutral | Mid-level neutral text, decorative fills, subtle borders |
| Digital Blue | #99c3ff | brand | Link text, outlined button borders, key accent elements indicating interactability |
| Sky Highlight | #c2e7ff | accent | Blue wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Arial | system-ui | 400 | 13px, 14px, 15px | 1.20, 1.43, 1.85, 2.15 | Body copy, navigation links, secondary labels, button text. Provides clear, utilitarian readability. |
| Google Sans | Roboto, Noto Sans | 400, 500 | 14px, 16px | 1.20, 1.38 | Brand-specific headings, significant interface elements, search input text. Its custom curves lend a distinct, approachable, yet authoritative feel. |
| Google Sans Text | Roboto, Noto Sans | 500 | 14px | 1.29 | Navigation items with slightly more emphasis. Complements Google Sans with a friendly, readable clarity for interactive labels. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.85 |  |
| body-sm | 14 | 1.85 |  |
| body | 15 | 1.85 |  |

## Spacing & Shape

```json
{
  "radius": {
    "inputs": "26px",
    "buttons": "8px",
    "navItems": "100px",
    "callToActions": "100px"
  },
  "elementGap": "15px",
  "sectionGap": "40px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Search Input Field

**Role:** Primary interactive element

Features a Charcoal Grey (#303134) background with Silver Mist (#e8e8e8) text and a large 26px border-radius, giving it a friendly, prominent presence. Padding for input is 14px left and right, with 0px top/bottom, implying the height is controlled by content.

### Filled Search Button

**Role:** Direct action

Uses a Charcoal Grey (#303134) background with Silver Mist (#e8e8e8) text, and 8px border-radius. Padding is 16px horizontal and no vertical padding, suggesting height is set by surrounding elements.

### Ghost Navigation Link

**Role:** Secondary navigation

Text in Silver Mist (#e8e8e8) on a transparent background, 8px horizontal padding, 0px vertical padding. Focus/hover states may leverage Digital Blue for border or background.

### Accented Outlined Button

**Role:** Key interaction cue

Features a Digital Blue (#99c3ff) border, transparent background, and Digital Blue (#99c3ff) text for strong visual emphasis. It has a generous 100px border-radius creating a pill shape. 8px padding on all sides, often used for icons or smaller interactive elements.

### Sign-In Button

**Role:** Authenticated interaction

Utilizes a Sky Highlight (#c2e7ff) background with a prominent border-radius of 100px creating a pill shape. The text color is Carbon Black (#16171a), offering high contrast for visibility, with 8px horizontal padding.

## Do's

- Prioritize Carbon Black (#16171a) as the default background for all pages and sections to maintain the dark theme.
- Use Silver Mist (#e8e8e8) for primary text and important UI labels to ensure high contrast against dark backgrounds.
- Apply Charcoal Grey (#303134) for interactive component backgrounds, like buttons and input fields.
- Highlight interactive elements and links with Digital Blue (#99c3ff) for text color or borders.
- Ensure all buttons and interactive elements use a border-radius of either 8px for square forms, 26px for inputs, or 100px for pill shapes.
- Incorporate 15px as the standard elementGap for comfortable spacing between UI components.
- Use Arial, 400 weight for most body text and navigation, with sizes 13px, 14px, or 15px.

## Don'ts

- Avoid using light backgrounds, as the system is anchored in a dark theme.
- Do not introduce additional saturated colors beyond Digital Blue (#99c3ff) without specific functional justification.
- Do not deviate from the established border-radius values; maintain 8px, 26px, or 100px for consistency.
- Avoid excessive use of shadows or gradients; rely on color and subtle surface changes for hierarchy.
- Do not use generic system fonts for branding elements; Google Sans and Google Sans Text are reserved for specific uses.
- Do not create dense layouts; maintain comfortable spacing with a base unit derived from 4px.
- Do not use generic blue for links if Digital Blue (#99c3ff) is specified for interactive highlights.

## Layout

The page structure is full-bleed, with content centered. The hero section features the brand logo and search bar centrally placed against the dark background. Sections generally follow a consistent vertical rhythm, with ample spacing between key interactive elements (elementGap: 15px). The layout avoids complex grid structures, opting instead for stacked, centered components within its contained width. Navigation elements are minimal, appearing in a top bar and a simple footer.

## Imagery

This design system primarily uses UI-driven visuals, with minimal imagery. Icons are monocolor, typically in Silver Mist (#e8e8e8) or Ash Grey (#9aa0a6), with a standard stroke weight, serving a purely functional and indicative role. Any potential photography or illustration would be secondary to the clean dark interface, likely contained, and treated to complement the muted palette rather than stand out vibrantly. The emphasis is on clarity and direct communication through UI elements, not decorative visuals.

## Similar Brands

| Business | Why |
| --- | --- |
| DuckDuckGo | Both use a minimalist dark theme with prominent search inputs and clear, functional typography. |
| Brave Search | Adopts a dark mode-first approach, prioritizing interface clarity over visual complexity, similar to Google's search design. |
| Perplexity AI | Uses a dark, uncluttered interface with a central input, focusing on direct user interaction and information retrieval. |
| Vercel | Features a clean dark UI with high-contrast text and a focus on simple, rounded interaction elements. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference**
text: #e8e8e8
background: #16171a
border: #e8e8e8
accent: #99c3ff
primary action: #303134 (filled action)

**3-5 Example Component Prompts**
1. Create a primary search input component: Charcoal Grey (#303134) background, with a 26px border-radius, and Silver Mist (#e8e8e8) text using 'Google Sans', 14px, 400 weight. Include a 14px left padding.
2. Design a 'Search' button: Charcoal Grey (#303134) background, Silver Mist (#e8e8e8) text, 8px border-radius, and 16px horizontal padding. Font is 'Google Sans', 14px, 400 weight.
3. Implement a 'Sign In' button: Sky Highlight (#c2e7ff) background, Carbon Black (#16171a) text, 100px border-radius, 8px horizontal padding. Font is 'Google Sans Text', 14px, 500 weight.
4. Show a standard navigation link: Silver Mist (#e8e8e8) text, transparent background, Arial font, 13px, 400 weight, 8px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515923322-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515923322-thumb.jpg |
