# Homerun — Refero Style

- Refero URL: https://styles.refero.design/style/721d4954-389e-4003-91e3-efff373f0f0f
- Site URL: https://www.homerun.co
- ID: 721d4954-389e-4003-91e3-efff373f0f0f
- Theme: light
- Industry: saas
- Created: 2026-04-30T00:50:51.248Z
- Ranks: newest: 684, popular: 1200, trending: 1182

> Warm, playful professionalism with soft edges.

## Description

Homerun employs a whimsical, modern aesthetic through a muted, earthy color palette punctuated by vibrant, deep blues and a playful use of soft, chunky card shadows. Typography is clean and confident, creating a comfortable information hierarchy. Components feature generous padding, organic rounded corners, and a light-hearted visual rhythm that prioritizes a friendly user experience over stark efficiency.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, ghost button backgrounds, default text color on dark surfaces |
| Vanilla Cream | #faf9f7 | neutral | Secondary card surfaces, subtle background variations |
| Paper Beige | #edebe7 | neutral | Tertiary card backgrounds, button borders, subtle surface accents |
| Warm Gray | #736b6b | neutral | Muted text, secondary navigation links, subtle borders |
| Charcoal Coffee | #4a3e3e | neutral | Primary text, darker borders, icon fills, placeholder text |
| Deep Mocha | #2d2323 | neutral | Headline text, strong accents, button text on light surfaces |
| True Black | #000000 | neutral | Strongest contrast for headlines and critical information |
| Royal Blue | #4f75fe | brand | Primary action buttons, active navigation states, interactive links, brand accents — a vibrant, trustworthy blue |
| Oceanic Blue | #c9d5fd | accent | Soft background washes, decorative card elements |
| Grape Punch | #f0a8fa | accent | Decorative card backgrounds, accent surfaces |
| Bubblegum Pink | #d386de | brand | Distinctive card shadow color — a playful, vibrant elevation cue |
| Spring Green | #00c275 | accent | Green action color for filled buttons, selected navigation states, and focused conversion moments. Use as a supporting accent, not as a status color |
| Rich Blue | #4353ff | brand | Secondary action button fill and border |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GT America | Inter | 400, 500, 700 | 13px, 14px, 16px, 18px, 20px, 22px, 28px, 50px | 1.11, 1.20, 1.25, 1.30, 1.38, 1.40, 1.43, 1.44, 1.45, 2.00 | Primary UI text, body copy, navigation, buttons, and most informational elements. Its clarity and range of weights provide a solid, readable foundation. |
| GT Walsheim | Montserrat | 900 | 20px, 22px, 30px, 34px, 48px, 64px, 82px | 1.00, 1.10, 1.18, 1.20, 1.40 | Display headlines and hero text. The extra bold weight and subtle, proportional negative letter-spacing give it a confident, modern presence without being overly aggressive. |
| Oliver | DM Serif Display | 400 | 22px | 1.40 | Likely used for decorative quotes or specific brand messaging, bringing an artistic, serif touch. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.45 | 0 |
| body | 16 | 1.43 | 0 |
| subheading | 20 | 1.25 | 0 |
| heading-sm | 22 | 1.2 | 0 |
| heading | 30 | 1.2 | -0.12 |
| heading-lg | 48 | 1.18 | -0.72 |
| display | 82 | 1 | -1.89 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "20-40px",
    "links": "100px",
    "inputs": "30px",
    "buttons": "10-12px",
    "default": "10px"
  },
  "elementGap": "8px",
  "sectionGap": "43px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Button

**Role:** Secondary navigation and utility actions.

Text: Charcoal Coffee (#4a3e3e), no background. Border: Charcoal Coffee (#4a3e3e), 0px radius. Padding: 14px vertical, 20-24px horizontal. Appears as a text link with a bottom border on hover.

### Primary CTA Button

**Role:** Key conversion action.

Background: Royal Blue (#4f75fe), Text: Canvas White (#ffffff). Radius: 12px. Padding: 12px vertical, 16-20px horizontal. Emphasizes urgency and brand identity.

### Standard Button

**Role:** General purpose buttons.

Background: Canvas White (#ffffff), Text: Charcoal Coffee (#4a3e3e). Border: Paper Beige (#edebe7). Radius: 10px. Padding: 12px vertical, 16-20px horizontal.

### Small Text Button with Icon

**Role:** In-line actions or links within denser content.

Background: Transparent. Text: Deep Mocha (#2d2323). Border: Deep Mocha (#2d2323). Radius: 10px. Padding: 0px vertical, 0-12px horizontal. Used for compact actions, often with an arrow icon.

### Hero Card with Playful Shadow

**Role:** Visually appealing content blocks.

Background: Grape Punch (#f0a8fa). Radius: 20px. Box Shadow: Bubblegum Pink (#d386de) 0px 4px 5px 0px. Padding: 60px vertical, 50px horizontal.

### Neutral Content Card

**Role:** Standard content containers, features, testimonials.

Background: Vanilla Cream (#faf9f7) or Paper Beige (#edebe7). Radius: 20-40px. No shadow. Padding: 40-48px vertical, 48-64px horizontal.

### Outline Input

**Role:** User input fields.

Background: rgba(45, 35, 35, 0.1). Text: Charcoal Coffee (#4a3e3e). Border: Warm Gray (#595d68). Radius: 30px (left side), 0px (right side). Padding: 8px vertical, 12-20px horizontal for a pill-like shape.

### Cookie Consent Modal

**Role:** Legal consent UI.

Background: Canvas White (#ffffff). Radius: 20px. No shadow. Padding: Not directly specified, but internally uses standard component structure.

### Cookie Consent Confirm Button

**Role:** Action within cookie consent modal.

Background: Rich Blue (#4353ff). Text: Canvas White (#ffffff). Border: Rich Blue (#4353ff). Radius: 12px. Padding: 12px vertical, 16-20px horizontal.

### HR Feature Tag

**Role:** Categorization or feature highlight.

Background: Spring Green (#00c275). Text: Canvas White (#ffffff). Border radius: 12px. Padding: 12px vertical, 16px horizontal. Signifies HR-related content.

## Do's

- Prioritize Royal Blue (#4f75fe) for primary actions and active states.
- Use GT Walsheim 900 for all display and large headlines, applying proportional negative letter-spacing for visual punch.
- Apply generous padding (40-60px vertical, 48-64px horizontal) to cards to create a spacious feel.
- Utilize soft, organic border radii: 20px for most cards, up to 40px for larger decorative cards, and 10-12px for buttons.
- Employ the Bubblegum Pink (#d386de) for soft, vibrant card shadows, moving away from conventional grayscale shadows.
- Maintain a clear hierarchy: Deep Mocha (#2d2323) for headlines, Charcoal Coffee (#4a3e3e) for body text, and Warm Gray (#736b6b) for muted or secondary information.
- Leverage Canvas White (#ffffff), Vanilla Cream (#faf9f7), and Paper Beige (#edebe7) for layered background surfaces.

## Don'ts

- Avoid harsh, sharp corners; all component corners should have a radius of at least 10px.
- Do not use dark, heavy shadows; opt for the light-hearted Bubblegum Pink (#d386de) shadow or no shadow.
- Do not introduce new saturated hues outside of Royal Blue (#4f75fe) or the accent purples and pinks for UI elements.
- Do not use highly dense layouts; ensure ample negative space around elements and between sections.
- Do not use generic system fonts for any text role; always use GT America or GT Walsheim (or their recommended substitutes).
- Avoid purely black text (#000000) for standard body copy; reserve it for high-contrast headlines or specific bold statements.
- Do not center-align large blocks of body text; left-align for readability.

## Layout

The page uses a contained layout with some full-bleed hero sections. Max width isn't explicitly defined visually but elements are centrally aligned. Hero sections often feature large, bold headlines centered over backgrounds, with content typically structured in alternating left-text/right-visual or right-text/left-visual blocks. Features are presented in multi-column card grids, emphasizing the soft-edged, spaced-out card components. Vertical rhythm is established through consistent section gaps and generous component padding. The primary navigation is a sticky top bar with clearly delineated sections.

## Imagery

Imagery features a mix of conceptual illustrations and product screenshots, often combined. Illustrations are abstract, feature organic shapes and are rendered in muted, brand-aligned colors. Photography, when present, tends to be tightly cropped on subjects, minimizing busy backgrounds. Icons are generally outlined, with a moderate stroke weight, and monochrome in brand colors or neutrals. Imagery serves both decorative and explanatory roles, adding a friendly and approachable feel.

## Elevation

| Element | Style |
| --- | --- |
| Hero Card | rgb(211, 134, 222) 0px 4px 5px 0px |
| Button Focus | rgb(227, 225, 221) 0px 2px 0px 0.5px |

## Similar Brands

| Business | Why |
| --- | --- |
| Framer | Shares a sophisticated, slightly playful aesthetic with vibrant accent colors on mostly neutral backgrounds and ample whitespace. |
| Notion | Similar approach to clean, component-based UI with generous padding and soft rounded corners, prioritizing clarity and usability. |
| Linear | Uses a single, strong accent color (blue), paired with a predominantly neutral palette, and a focus on clean typography. |
| Webflow | Features bright, engaging branding colors and a well-defined card-based layout with soft shadows and rounded elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #4a3e3e
background: #ffffff
border: #edebe7
accent: #f0a8fa
primary action: #4f75fe (filled action)

Example Component Prompts:
1. Create a Primary CTA Button: Royal Blue (#4f75fe) background, Canvas White (#ffffff) text, 12px radius, 12px vertical padding, 16px horizontal padding. Text uses GT America 500, 16px.
2. Design a Hero Card: Grape Punch (#f0a8fa) background, 20px radius, Bubblegum Pink (#d386de) 0px 4px 5px 0px box shadow, 60px vertical padding, 50px horizontal padding. Headline uses GT Walsheim 900, 64px, Deep Mocha (#2d2323), letter-spacing -1.02px.
3. Implement a Neutral Content Card: Vanilla Cream (#faf9f7) background, 40px radius, no shadow, 48px vertical padding, 64px horizontal padding. Body text uses GT America 400, 16px, Charcoal Coffee (#4a3e3e).
4. Build an Outline Input Field: rgba(45, 35, 35, 0.1) background, Charcoal Coffee (#4a3e3e) text, Warm Gray (#595d68) border, 30px radius on left, 0px on right, 8px vertical padding, 20px left padding, 12px right padding. Placeholder text in Warm Gray (#736b6b).
5. Create a Ghost Navigation Button: Transparent background, Charcoal Coffee (#4a3e3e) text, no border. Padding 14px vertical, 24px horizontal. Text uses GT America 500, 14px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510214376-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510214376-thumb.jpg |
