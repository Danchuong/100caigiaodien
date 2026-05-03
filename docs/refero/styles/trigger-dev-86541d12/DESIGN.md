# Trigger.dev — Refero Style

- Refero URL: https://styles.refero.design/style/86541d12-7870-4d51-8c47-0880fdb1ea01
- Site URL: https://trigger.dev
- ID: 86541d12-7870-4d51-8c47-0880fdb1ea01
- Theme: dark
- Industry: devtools
- Created: 2026-01-16T11:35:48.000Z
- Ranks: newest: 1311, popular: 350, trending: 381

> Midnight Terminal, illuminated by command prompts and spectral highlights.

## Description

Trigger.dev creates a 'technical luxury' dark mode experience, balancing utility with subtle visual richness. The deep charcoal backgrounds paired with crisp, cool-toned neutrals establish a serious, professional tone, while vibrant accents act as precise markers on a complex system. Custom fonts with precise letter-spacing and varied weights contribute to its sharp, information-dense feel. The interplay of minimalist buttons with sharp corners against a few pill-shaped elements hints at a system that values both traditional interface clarity and modern digital fluidity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Obsidian Black | #121317 | neutral | Primary background for the application shell and content sections. |
| Charcoal Surface | #1c1e21 | neutral | Card backgrounds, elevated content panels, and subtle section dividers. |
| Ash Gray | #3b3e45 | neutral | Subtle borders and inactive element states, providing a discrete visual separation. |
| Slate Text | #d7d9dd | neutral | Primary Readable text, headings, and icon fills. |
| Whisper White | #e5e7eb | neutral | High-contrast text for active states and critical information, button borders. |
| Steel Accent | #b5b8c0 | neutral | Secondary text, muted descriptions, and placeholder text. |
| Spring Green | #a8ff53 | brand | Primary call-to-action buttons, 'get started' elements, and positive status indicators — a vibrant beacon against dark surfaces. |
| Cloud Violet | #9c9af2 | accent | Highlighting interactive elements, sub-headings, and decorative accents, suggesting an underlying digital core. |
| Deep Plum | #7655fd | accent | Secondary accent for interactive elements and specific highlighted text, providing depth to the purple spectrum. |
| Fuchsia Highlight | #fa3abf | accent | Decorative elements, iconography, and occasional text highlights. |
| Cosmic Blue | #479dec | accent | Specific iconography and product feature highlights. |
| Flare Orange | #eccf06 | accent | Accent for status indicators or specific feature callouts. |
| Action Red | #f43f5 | semantic | Used for error states or urgent notifications. |
| Success Green | #afec73 | semantic | Success messages and positive confirmations; distinct from brand green. |
| Highlight Gradient | #878c99 | neutral | Subtle background shading on review cards, creating a sense of dimension without harsh shadows. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Geist-Regular | Inter | 300, 400, 500 | 14px, 16px, 18px, 20px | 1.40, 1.43, 1.50, 1.56, 1.71 | Body copy, navigation items, general UI labels. Its neutral, legible character forms the workhorse text of the system. |
| GeistMono-Regular | JetBrains Mono | 300, 400 | 14px | 1.43 | Specialized for code blocks and technical annotations, providing a distinct, precise feel for developer-centric content. |
| Satoshi-Variable | Outfit | 500, 600 | 16px, 18px, 20px, 24px, 30px, 36px, 48px, 60px | 1.00, 1.11, 1.20, 1.33, 1.38, 1.40, 1.50, 1.56 | Primary typeface for all headlines and display text. Its distinct, confident forms and subtle letter-spacing give visual weight to key messages. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 14 | 1.5 |  |
| body | 16 | 1.5 |  |
| subheading | 18 | 1.4 |  |
| heading-sm | 20 | 1.38 |  |
| heading | 24 | 1.33 |  |
| heading-lg | 36 | 1.2 | 0.25 |
| display | 60 | 1.11 | 0.5 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "9999px",
    "buttons": "4px",
    "default": "4px"
  },
  "elementGap": "8px",
  "sectionGap": "40px",
  "cardPadding": "28px",
  "pageMaxWidth": null
}
```

## Components

### CTA Button Group



### Feature Tag Pills



### Testimonial Card



### Primary Action Button

**Role:** Main call to action

Rounded rectangular button with Spring Green (#a8ff53) background, Obsidian Black (#121317) text. Text is Satoshi-Variable, weight 600, 16px. Padding: 8px vertical, 12px horizontal. Border radius: 4px.

### Ghost Navigation Button

**Role:** Secondary navigation and non-primary actions

Transparent background, Slate Text (#d7d9dd) text. Text is Geist-Regular, weight 400, 16px. Padding: 4px vertical, 8px horizontal. Border radius: 4px.

### Subtle Information Button

**Role:** Informational or tertiary actions within content sections

Dark translucent background rgba(26, 27, 31, 0.5), Whisper White (#e5e7eb) text. Text is Geist-Regular, weight 400, 16px. Border radius: 4px. Padding: 8px vertical, 12px horizontal. Border: 1px solid Whisper White (#e5e7eb).

### Minor Navigation Link

**Role:** Small, context-specific links in clusters

Transparent background, Steel Accent (#b5b8c0) text. Text is Geist-Regular, weight 400, 16px. No specific padding or border, serves as an in-line clickable element.

### Feature Tag

**Role:** Categorization or short labels

Pill-shaped with Obsidian Black (#121317) background and Spring Green (#a8ff53) text. Text is Geist-Regular, weight 400, 14px. Border radius: 9999px. Padding: 4px vertical, 12px horizontal.

### Client Logo Card

**Role:** Displaying trusted brand logos

Charcoal Surface (#1c1e21) background, with a 1px border of Ash Gray (#3b3e45). Content is centered. Border radius: 4px. Padding: dynamically adapts to content, min vertical 12px, horizontal 16px.

### Testimonial Card

**Role:** Showcasing user feedback

Charcoal Surface (#1c1e21) background with a 1px Whisper White (#e5e7eb) border. Border radius: 4px. Internal padding: 28px. Features Slate Text (#d7d9dd) body copy (Geist-Regular 16px) and Satoshi-Variable headings.

## Do's

- Use Obsidian Black (#121317) as the primary page background to maintain the strong dark theme.
- Apply 4px border radius for all card components, buttons, and input fields for a consistent technical appearance.
- Utilize Spring Green (#a8ff53) exclusively for primary calls to action, maintaining its high-impact role.
- Employ Geist-Regular 16px, weight 400, and Slate Text (#d7d9dd) for all standard body copy.
- Reserve Satoshi-Variable for all headings, ensuring letter-spacing of 0.25px and 0.5px is applied at larger sizes as indicated in typography.
- Maintain an elementGap of 8px between closely related UI elements like buttons in a group or icons and text.
- Use Ash Gray (#3b3e45) for subtle borders and dividers between content blocks to delineate sections without strong visual breaks.

## Don'ts

- Do not use saturated colors other than Spring Green (#a8ff53) as primary button backgrounds.
- Avoid applying large, soft shadows; leverage background color changes for elevation and depth instead.
- Do not use more than two saturated accent colors in close proximity to prevent visual clutter and maintain focus on the core information.
- Resist using highly decorative or illustrative imagery; favor clean, functional visuals or code snippets.
- Do not vary line-height significantly from the type scale; precise vertical rhythm is key for readability.
- Avoid pill shapes (9999px radius) for anything other than small, tertiary elements like tags to preserve the predominantly rectangular aesthetic.
- Do not use bold weights (600+) from Geist-Regular; rely on Satoshi-Variable for strong typographic emphasis.

## Layout

The layout follows a primarily max-width contained model (around 1200px equivalent) with centered content blocks, although the hero section extends full-bleed with a dark background. Sections generally alternate between distinct dark backgrounds, creating a clear vertical rhythm. Content is arranged in alternating text-left/visual-right patterns or centered stacks for stronger statements. There's a 3-column card grid for features and testimonials. Navigation is a sticky top bar with a left-aligned logo and right-aligned actions. The overall density is comfortable, with generous vertical spacing (40px) between sections.

## Imagery

The site uses a combination of abstract, gradient-infused graphics, product screenshots, and intricate code snippets. Imagery is generally contained within sections, not full-bleed, and often features a subtle dark background or blur. Photography is minimal, primarily headshots for testimonials. Icons are outline-style, mono-color, and subtle, often employing accent colors for specific features. The primary visual language centers around showcasing code and technical diagrams, giving a direct and functional representation of the product. Imagery is used to explain concepts, not merely decorate, reinforcing the developer-tool identity.

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Shares a sophisticated dark-mode aesthetic with strong typography and strategic use of a single vibrant accent color against a clean, technical background. |
| Stripe (developer docs) | Employs an information-dense yet clean layout, relying on precise typography, subtle monochromatic grays, and code snippets as core visual elements. |
| Linear | Features a similar philosophy of deep, dark interface backgrounds, crisp neutral text, and focused, vibrant accent colors for interactivity. |
| Tailwind CSS | Exhibits a modular, structured aesthetic with clear visual hierarchy, often using dark themes and sharp corner radii for a utilitarian feel. |
| GitHub (dark theme) | Common ground in dark interface design, monospace fonts for code, and a professional, no-nonsense approach to presenting technical information. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #d7d9dd
- Background: #121317
- CTA: #a8ff53
- Border: #e5e7eb
- Accent: #9c9af2

### Example Component Prompts
1. Create a primary call to action button: Spring Green background, Obsidian Black text. Text is Satoshi-Variable, weight 600, 16px. Padding: 8px vertical, 12px horizontal. Border radius: 4px. Label: 'Start building now'.
2. Design a Testimonial Card: Charcoal Surface background, 1px Whisper White border, 4px border radius, 28px internal padding. Headline: Satoshi-Variable, 24px, #d7d9dd. Body text: Geist-Regular, 16px, #d7d9dd.
3. Make a Feature Tag: Pill-shaped with Obsidian Black background, Spring Green text. Text is Geist-Regular, 14px, weight 400. Padding: 4px vertical, 12px horizontal. Label: 'AI agents'.
4. Generate a Hero Headline: Text 'Build and deploy fully‑managed AI agents and workflows'. Apply Satoshi-Variable font, size 60px, weight 600, letter-spacing 0.5px, Slate Text (#d7d9dd) color, centered.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923436132-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923436132-thumb.jpg |
