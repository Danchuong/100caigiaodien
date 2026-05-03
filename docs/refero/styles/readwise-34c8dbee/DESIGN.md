# Readwise — Refero Style

- Refero URL: https://styles.refero.design/style/34c8dbee-f5d9-4495-a0e0-a25c6ca4b95b
- Site URL: https://readwise.io
- ID: 34c8dbee-f5d9-4495-a0e0-a25c6ca4b95b
- Theme: light
- Industry: productivity
- Created: 2026-02-22T09:37:09.000Z
- Ranks: newest: 1148, popular: 514, trending: 1035

> Scholarly Workspace Blueprint. It feels like an organized desk with a clear task list.

## Description

This design evokes the feel of a diligent academic workspace – focused and organized, with clear visual cues to guide attention. The use of a brand-specific blue for interactive elements cuts through the otherwise muted, almost off-white background and near-black text, signaling action without being overly aggressive. Highlights and key phrases stand out with a soft, muted yellow background, mimicking physical highlighters, creating a direct visual reference to core product functionality. The interplay of a custom serif font for display text against a highly legible sans-serif for body content establishes a serious yet approachable scholarly tone.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #1f1f1f | neutral | Primary text color for accessibility, dark backgrounds on specific elements. |
| Page Canvas | #ffffff | neutral | Dominant background color for pages and cards. |
| Ash Cloud | #f1f5f8 | neutral | Subtle background for alternating sections or distinct content blocks. |
| Highlight Yellow | #fff7ca | accent | Used for emphasized text backgrounds, visually representing highlighting functionality. |
| Action Blue | #478cd0 | brand | Primary interactive color for buttons, links, and active states. |
| Status Orange | #fb9100 | accent | Small accent for badges or secondary indicators, often associated with a 'new' status. |
| Sky Gradient | #7496f7 | brand | Background for specific visual elements, providing a soft depth. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Mulish | system-ui, sans-serif | 400, 600, 700, 800 | 11px, 14px, 16px, 18px, 22px | 1.09, 1.25, 1.50 | Primary sans-serif font for all body text, navigation, and button labels; its consistent letter-spacing across weights maintains high legibility. |
| Charter | serif | 400, 600 | 22px, 29px, 50px | 1.00, 1.13, 1.25 | Serif font reserved for headlines and emphasized text; its distinctive character brings gravitas and a classic, academic feel to display typography. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.5 | -0.44 |
| body-sm | 14 | 1.5 | -0.28 |
| body | 16 | 1.5 | -0.32 |
| subheading | 18 | 1.25 | -0.36 |
| heading | 22 | 1.13 | -0.44 |
| heading-lg | 29 | 1.13 |  |
| display | 50 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "10px",
    "buttons": "10px",
    "navItems": "16px"
  },
  "elementGap": "5-24px",
  "sectionGap": "30-35px",
  "cardPadding": "12px",
  "pageMaxWidth": "1440px"
}
```

## Components

### Primary CTA Button Group



### How Readwise Works — Feature Steps



### User Testimonial Cards



### Primary Action Button

**Role:** Interactive element

Filled button with 'Action Blue' background (#478cd0), 'Page Canvas' text (#ffffff), 10px border-radius, and generous padding (8px vertical, 18px horizontal). Uses Mulish font.

### Navigation Link

**Role:** Navigation

Text links appearing in the top navigation bar, using Mulish font at 14px size. Color is 'Midnight Ink' #1f1f1f, occasionally 'Action Blue' #478cd0 for active states. Some have a 10px or 16px radius for interactive elements.

### Highlighted Text Block

**Role:** Emphasis

Body text with a 'Highlight Yellow' background (#fff7ca), drawing attention to key phrases or product features in the same way a physical highlighter works.

### Hero Headline

**Role:** Display

Large, prominent text using Charter font, typically at 50px size and 600 weight, in 'Midnight Ink' (#1f1f1f), commanding attention on initial page load.

### Feature Icon Block

**Role:** Information display

Small icons typically associated with a description, using a 'Sky Gradient' background for visual distinctiveness.

## Do's

- Use 'Action Blue' (#478cd0) exclusively for primary call-to-actions and interactive elements to maintain focus.
- Apply Charter font only for headlines (22px, 29px, 50px) to preserve its distinct visual impact.
- Maintain a 10px border-radius for all primary buttons and card-like elements to ensure visual consistency.
- Ensure ample vertical spacing between sections, leveraging 30px or 35px, to create a comfortable reading density.
- Utilize 'Highlight Yellow' (#fff7ca) only for subtle background emphasis on text, mimicking physical highlighting.

## Don'ts

- Do not use highly saturated colors for large background areas; stick to 'Page Canvas' (#ffffff) and 'Ash Cloud' (#f1f5f8).
- Avoid using Mulish for display headlines; reserve Charter for this purpose.
- Do not vary border-radius for interactive buttons; always use 10px.
- Do not introduce new color gradients; use `Sky Gradient` only where specifically defined.
- Do not apply excessive letter-spacing to Mulish; maintain its default -0.0200em.

## Layout

The page adopts a max-width centered layout, with a `pageMaxWidth` of 1440px providing containment. The hero section is full-bleed white, featuring a prominent centered headline, subtext, and a central product visual composed of device mockups. Sections maintain a consistent vertical rhythm, primarily defined by the 30-35px `sectionGap`. Content is often presented in centered stacks or simple two-column arrangements (text alongside mockups). Navigation is a sticky top bar with minimal items and a clear 'Sign In' call to action. The overall density is comfortable, allowing text and visuals to breathe without feeling sparse.

## Imagery

The site's imagery is primarily product-focused, featuring crisp screenshots of the Readwise application running on laptops and mobile devices. These are meticulously presented on white backgrounds, often slightly angled, emphasizing clarity and functionality. Icons are simple, filled, and occasionally two-toned (white on blue/orange) or line-art in 'Midnight Ink' to explain features. The overall treatment is literal and explanatory, serving to showcase the product's interface and capabilities rather than evoke an emotional response. Visual density is moderate, breaking up text blocks with relevant interface displays.

## Similar Brands

| Business | Why |
| --- | --- |
| Instapaper | Focus on reading, highlighting, and information consumption with a clean, text-centric interface. |
| Notion | Productivity tool with a clean, functional aesthetic and emphasis on clear content structure. |
| Pocket | Content aggregation and reading experience with a white background and strong emphasis on text legibility. |
| Evernote | Note-taking app with a clear organization system and functional UI over heavy visual flair. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #1f1f1f
- Background: #ffffff
- CTA: #478cd0
- Border: #478cd0 (for interactive elements)
- Accent: #fff7ca

### 3-5 Example Component Prompts
1. Create a primary call-to-action button: text 'GET STARTED NOW', Mulish font weight 600, 16px size, 'Page Canvas' text color, 'Action Blue' background, 10px border-radius, 8px vertical padding, 18px horizontal padding.
2. Design a hero headline: text 'Elevate Your Reading', Charter font weight 600, 50px size, 'Midnight Ink' color, 1.0 line height.
3. Develop a feature summary block: icon area at 35px height/padding with 'Sky Gradient' background, followed by a Mulish 18px weight 700 'Midnight Ink' title, then Mulish 16px weight 400 'Midnight Ink' description.
4. Generate a navigation link: text 'Reader', Mulish font weight 400, 14px size, 'Midnight Ink' color, no background, 10px border-radius, 6px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924685216-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924685216-thumb.jpg |
